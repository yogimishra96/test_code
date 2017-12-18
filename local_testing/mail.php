<?php

require_once '../helpdesk/library/PHPMailer/PHPMailerAutoload.php';


       $mail    = new PHPMailer();
        $subject = "New ticket has been created - ";
        $body    = "<p>Dear,<p>
                    <p>you have crated a support ticket.</p> 
                    <p>our agent will resolve your problem as soon as possible.</p>
                    <p>you can view and respond to the ticket here</p> 

                    <p>http://wholesalebox.in/support</p>

                    <p>Sincerely,</p>
                    <p>wholesalebox Support Team</p>";


        $mail->isSMTP(); // enable SMTP
        $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587; // or 587
        // $mail->IsHTML(true);    
        $mail->Username = "yogesh.wsb@gmail.com";        
        $mail->Password = "";                 
        $mail->SetFrom("yogeh.wsb@gmail.com");         
        $mail->Subject = $subject;                  
        $mail->Body    = $body;                            
        $mail->addAddress("yogimishra96@gmail.com");
        // $mail->addReplyTo("yogimishra96+".$this->ticket_info['id']."@gmail.com");
        // $mail->addAddress('rakesh.shekhawat@wholesalebox.in', 'Rakesh Shekhawat');
        // $mail->addCC('yogesh@wsb@gmail.com','rakesh shekhawat');
        $mail->addCustomHeader("Content-Type: text/html; charset=ISO-8859-1\r\n");
        // echo "<pre>";
        // print_r($mail);
        $mail->Send();

?>

