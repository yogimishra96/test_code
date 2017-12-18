<?php

$handle = fopen ("php://stdin", "r");
function solve($a0, $a1, $a2, $b0, $b1, $b2){	
    // if($a0 > $b0){
    // 	$alice1 = 1;
    // 	$bob1   = 0;
    // }elseif($a0 == $b0){
    // 	$alice1 = 0;
    // 	$bob1   = 0;
    // }elseif($a0 < $b0){
    // 	$alice1 = 0;
    // 	$bob1   = 1;
    // }
    

    // if($a1 > $b1){
    // 	$alice2 = 1;
    // 	$bob2   = 0;
    // }elseif($a1 == $b1){
    // 	$alice2 = 0;
    // 	$bob2   = 0;
    // }elseif($a1 < $b1){
    // 	$alice2 = 0;
    // 	$bob2   = 1;
    // }

    // if($a2 > $b2){
    // 	$alice3 = 1;
    // 	$bob3   = 0;
    // }elseif ($a2 == $b2){    
    // 	$alice3 = 0;
    // 	$bob3   = 0;
    // }elseif($a2 < $b2){
    // 	$alice3 = 0;
    // 	$bob3   = 1;
    // }
    // // echo $bob1 . $bob1 . $bob3; die();

    // $total[] = $alice1 + $alice2 + $alice3;
    // $total[] = $bob1 + $bob1 + $bob3; 
    // return $total;

	    
    $dat[] = (int)($a0 > $b0) + (int)($a1 > $b1) + (int)($a2 > $b2);
  	$dat[] = (int)($b0 > $a0) + (int)($b1 > $a1) + (int)($b2 > $a2);
  	return $dat;




}

fscanf($handle, "%d %d %d", $a0, $a1, $a2);
fscanf($handle, "%d %d %d", $b0, $b1, $b2);
$result = solve($a0, $a1, $a2, $b0, $b1, $b2);
echo implode(" ", $result)."\n";

    

?>
