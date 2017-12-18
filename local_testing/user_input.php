<?php
// $a1 = fopen("php://stdin","r");
// $n = fgets($a1);


/**
* 
*/
class ClassName{
	public function factorial(){		
		$a = '1';
		$b = &$a;	
		$b = "2$b";
		echo $a.", ".$b;
	}


}


$class = new ClassName();
$data  = $class->factorial(); 




?>