<?php

$agent_id = "21";
if($agent_id){    
setcookie("agent_id",$agent_id, time()+30*24*60*60, "/");
}   
echo "<pre>";
print_r($_COOKIE);

// setcookie("agent_id", "", time() - 3600, "/");
// echo "<pre>";
// print_r($_COOKIE);

die();     


// if(!isset($_COOKIE["agent_id"])) {
// echo "Cookie named agent_id  is not set!";
// } else {
// echo "Cookie agent_id is set!<br>";
// echo "Value is: " . $_COOKIE["agent_id"];
// }






?>
