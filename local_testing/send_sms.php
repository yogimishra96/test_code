<?php

// SMS Sending Block of code
           $request = ""; //initialise the request variable
           $param['method'] = "sendMessage";
           $param['send_to'] = "91" . "8824179288";
           $param['msg'] = "Test SMS from helpdesk development";
           $param['userid'] = "";
           $param['password'] = "";
           $param['v'] = "1.1";
           $param['msg_type'] = "TEXT"; //Can be "FLASH”/"UNICODE_TEXT"/”BINARY”
           $param['auth_scheme'] = "PLAIN";

//Have to URL encode the values
           foreach ($param as $key => $val) {
               $request .= $key . "=" . urlencode($val);
//we have to urlencode the values
               $request .= "&";
//append the ampersand (&) sign after each parameter/value pair
           }
           $request = substr($request, 0, strlen($request) - 1);
//remove final (&) sign from the request
           $url = "http://enterprise.smsgupshup.com/GatewayAPI/rest?" . $request;
echo $url; die;
           $ch = curl_init($url);
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
           $curl_scraped_page = curl_exec($ch);
// print_r($curl_scraped_page ); 
           curl_close($ch);
           $response = explode('|', $curl_scraped_page);

           print_r($response); 
 

?>   