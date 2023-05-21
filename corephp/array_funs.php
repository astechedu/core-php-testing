<?php

// array Function 
// array_combine(), array_merge(),

echo "<h1>Array Functions: </h1>";

$n1 = array(1,2,3,4,5);
$n2 = array(6,7,8,9,10);

$a1 = array('a', 'b', 'c', 'd');
$a2 = array('e', 'f', 'g', 'h');

$as1 = array('a' => 'dehradun', 'b' => 'dhampur', 'c' => 'dehli', 'd' => 'meerut');
$as1 = array('e' => 'ramput', 'f' => 'kanput', 'g' => 'noida', 'h' => 'amarnaath');

$emp1 = array('name' => 'amit', 'age' => 34, 'city' => 'dhamput');



echo "<pre>";print_r($a1);
echo "<pre>";print_r($a2);

//Array Merge
//$arr_merge = array_merge($a1,$a2);
//echo "<pre>";print_r($arr_merge);

//Array Combine
$arr_combine = array_combine($a1,$a2);
echo "<pre>";print_r($arr_combine);




?>