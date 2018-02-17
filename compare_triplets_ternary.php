<?php

$alice1 = (int)($a0 > $b0) + (int)($a1 > $b1) + (int)($a2 > $b2);
$bob1 = (int)($b0 > $a0) + (int)($b1 > $a1) + (int)($b2 > $a2);
echo $alice1." ".$bob1;


?>