<?php
// mail();
// die();
$to = "yogesh@mailinator.com";
$subject = "My subject";
$txt = "Hello world!";
// $headers = "From: webmaster@example.com" . "\r\n" .
// "CC: somebodyelse@example.com";

mail($to,$subject);
$error = error_get_last();
echo "<pre>";
print_r($error); die();

?>