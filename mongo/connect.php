<?php

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
echo "<pre>";
print_r($manager); die();

// $time =  new MongoDB\BSON\UTCDateTime((new DateTime($today))->getTimestamp()*1000);
$time = time();
$realtime = date("Y-m-d H:i:s", $time);
echo $realtime;
echo "<br>";
echo strtotime($realtime);
echo "<br>";
echo $time;
echo "<br>";

$a =  new MongoDB\BSON\UTCDateTime();

$datetime = $a->toDateTime();

print_r($datetime);
 
  $tt = time();
  $utcdatetime = new MongoDB\BSON\UTCDateTime(strtotime($tt));
  $date2 = new MongoDB\BSON\Timestamp(1, date($utcdatetime));
	
  print_r($date2);	

?>
