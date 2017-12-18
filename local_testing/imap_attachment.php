<?php

set_time_limit(3000); 

/* connect to gmail with your credentials */
$hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
$username = ''; 
$password = '';

/* try to connect */
$inbox = imap_open($hostname,$username,$password) or die('Cannot connect to Gmail: ' . imap_last_error());

$emails = imap_search($inbox,'TO '.$username.' UNSEEN SINCE "18 AUGUST 2017"');

/* if any emails found, iterate through each email */
if($emails) {

    $count = 1;

    /* put the newest emails on top */
    rsort($emails);

    /* for every email... */
    foreach($emails as $email_number) 
    {
        print_r($email_number);
        echo "<br>";
        /* get information specific to this email */
        $overview = imap_fetch_overview($inbox,$email_number,0);

        $message = imap_fetchbody($inbox,$email_number,2);

        /* get mail structure */
        $structure = imap_fetchstructure($inbox, $email_number);
        // echo "<pre>";
        // echo "******************************************************************************************";
        // print_r($structure);
        // echo "******************************************************************************************";
        // echo "<br>";
        $attachments = array();
        // echo "******************************************************************************************";
        // print_r($structure->parts);
        // echo "******************************************************************************************";
        // echo "<br>";

        /* if any attachments found... */
        if(isset($structure->parts) && count($structure->parts)) 
        {
            for($i = 0; $i < count($structure->parts); $i++) 
            {
                $attachments[$i] = array(
                    'is_attachment' => false,
                    'filename' => '',
                    'name' => '',
                    'size'      => '',
                    'attachment' => ''
                );
                // echo "***************bytes************";
                //    echo "<br>"; 
                // print_r($structure->parts[$i]->bytes);
                // echo "<br>";
                // echo "***************bytes************";

                if(isset($structure->parts[$i]->bytes) && !empty($structure->parts[$i]->bytes)){
                    $attachments[$i]['size'] = $structure->parts[$i]->bytes;    
                }
                

                if($structure->parts[$i]->ifdparameters) 
                {
                    foreach($structure->parts[$i]->dparameters as $object) 
                    {
                        if(strtolower($object->attribute) == 'filename') 
                        {
                            $attachments[$i]['is_attachment'] = true;
                            $attachments[$i]['filename'] = $object->value;
                        }
                    }
                }

                if($structure->parts[$i]->ifparameters) 
                {
                    foreach($structure->parts[$i]->parameters as $object) 
                    {
                        if(strtolower($object->attribute) == 'name') 
                        {
                            $attachments[$i]['is_attachment'] = true;
                            $attachments[$i]['name'] = $object->value;
                        }
                    }
                }

                if($attachments[$i]['is_attachment']) 
                {
                    $attachments[$i]['attachment'] = imap_fetchbody($inbox, $email_number, $i+1);

                    /* 3 = BASE64 encoding */
                    if($structure->parts[$i]->encoding == 3) 
                    { 
                        $attachments[$i]['attachment'] = base64_decode($attachments[$i]['attachment']);
                    }
                    /* 4 = QUOTED-PRINTABLE encoding */
                    elseif($structure->parts[$i]->encoding == 4) 
                    { 
                        $attachments[$i]['attachment'] = quoted_printable_decode($attachments[$i]['attachment']);
                    }
                }
            }
        }
        echo "<pre>";
        echo "******************************************************************************************";
        print_r($attachments);
        echo "******************************************************************************************";
        echo "<br>";

        /* iterate through each attachment and save it */
        foreach($attachments as $attachment)
        {
            if($attachment['is_attachment'] == 1)
            {
                $filename = $attachment['name'];
                if(empty($filename)) $filename = $attachment['filename'];

                if(empty($filename)) $filename = time() . ".dat";
                $date = date('d-m-y');
                $folder = "attachment/".$date."";
                if(!is_dir($folder))
                {
                     mkdir($folder ,0777, true);
                }
                $fp = fopen("./". $folder ."/". $email_number . "-" . $filename, "w+");
                if(fwrite($fp, $attachment['attachment'])){
                    echo "Successfully  saved ";
                }else{
                    echo "no saved";
                }
                fclose($fp);
            }
        }
    }
} 

/* close the connection */
imap_close($inbox);



?>