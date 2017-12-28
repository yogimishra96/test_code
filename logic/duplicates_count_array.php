<?php


$duplicates = array(1,2,"ram",4,2,3,4,5,4,5,"ram",6,7,"shyam",6,7,7,"shyam",5,4,5,"shyam",6,7,7,7,5,4);

$filtered   = array();
foreach ($duplicates as $key => $value) {
	// if(!isset($filtered[$value])){
	// 		$filtered[$value] = 0;
	// }
	// $filtered[$value]++ ;
	@$filtered[$value]++ ; 
}

echo count($duplicates);
print_r($filtered);



?>
