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

$s = "1, 2, 3, 4, 5, 6";

$res = explode(', ', $s);

var_dump(array_map('intval', $res));

$file = fopen('data.csv', 'r');
$arr = [];
while ($data = fgetcsv($file, null, ',')) {
    $arr[] = array_map('intval', $data);
}
fclose($file);
var_dump($arr);