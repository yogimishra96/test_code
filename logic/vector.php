<?php

$map = new \Ds;

$map->put('a', 1);
$map->put('b', 2);

$map['c'] = 3;

print_r($map);

?>