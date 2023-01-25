<?php

include 'test.php';

use \Ub\Test;

$t = new Test;
$arr = [$t];
echo "dies ist ein test".PHP_EOL;
var_dump($t);
echo phpversion().PHP_EOL;

$t = new Test(age: 18, name: "hans");

echo "$t->age, $t->name".PHP_EOL;

$arr[] = $t;

echo json_encode($arr);