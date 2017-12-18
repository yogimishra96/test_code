<?php


$n = fgets(STDIN);
$count = 1;
for($i = 1; $i<=$n; $i++ ){
	$count = $count * $i; 
}

echo $count;


?>