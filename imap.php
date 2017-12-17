<?php



$hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
$username = 'yogesh.wsb@gmail.com';
$password = 'yogesh@wsb';
$inbox    = imap_open($hostname,$username,$password)or die('Cannot connect to Gmail: '.imap_last_error());
$emails   = imap_search($inbox,'TO '.$username.' SEEN SINCE "24 AUGUST 2017"');            
if(!empty($emails)){
	/* put the newest emails on top */
	rsort($emails);  
	echo "<pre>";             
	print_r($emails);  
	foreach($emails as $email_number){
	      $overview    = imap_fetch_overview($inbox,$email_number,0);
	      
	      print_r($overview);

	}
}








?>