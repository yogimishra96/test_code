<?php

$handle = fopen ("php://stdin", "r");
function aVeryBigSum($n, $ar) {
    $count = 0;
        foreach($ar as $one_by_one ){
            $count = $count + $one_by_one;
        }
        echo $count;
}

fscanf($handle, "%i",$n);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = aVeryBigSum($n, $ar);
echo $result . "\n";

?>
