<?php
//Done: 
//array_push(),array_pop(),array_shift(),array_unshift(),array_unique(),array_combine(),is_array(),in_array()
//array_fill(),array_fill_keys(),array_keys(), array_key_first(), array_key_last(), array_key_exists(), key_exists(), array_flip(),array_merge(),array_merge_recursive(),array_combine(),array_unique(),array_count_values(),count(),sizeof(),
//array_product(),array_slice(),


//Array Function: 
//array_values(),array_count_values(),array_chunk(),array_column(),array_change_key_case(),array_diff(),array_diff_uassoc(),
//array_diff_assoc(),array_diff_keys(),array_diff_ukey(),array_fill(),array_fill_keys(),array_filter(),array_flip(),
//array_intersect_assoc(),array_intersect_key(),array_intersect(),array_key_exists(),array_keys(),array_key_recursive(),
//array_multisort(),array_pad(),array_product(),array_rand(),array_reduce(),array_replace_recursive(),array_replace(),
//array_reverse(),array_search(),array_slice(),array_splice(),array_sum(),array_udiff_assoc(),array_udiff(),array_intersect_assoc(),
//array_intersect_uassoc(),array_uintersect(),array_walk(),array_walk_recursive(),compact(),count(),current(),end(),extract(),
//in_array(),is_array(),key(),next(),ksort(),rsort(),list(),natsort(),natcasesort(),pos(),prev(),range(),reset(),shuffle(),sizeof(),
//sort(),uasort(),uksort(),usort(),each()


//----> array Functions <----

//$n1 = array(1,2,3,4,5);
//$n2 = array(6,7,8,9,10);

//$a1 = array('a', 'b', 'c', 'd');
//$a2 = array('e', 'f', 'g', 'h');

//$as1 = array('a' => 'dehradun', 'b' => 'dhampur', 'c' => 'dehli', 'd' => 'meerut');
//$as1 = array('e' => 'ramput', 'f' => 'kanput', 'g' => 'noida', 'h' => 'amarnaath');
//$emp1 = array('name' => 'amit', 'age' => 34, 'city' => 'dhampur');
//$users = array("amit","rohit","zubin","ram","aryan");

//$ar1 = ["amit","sonu","mohan"];
//$ar2 = ["aryan","radha"];

$ar3 = ["a"=>"ram", "b"=>"geeta", "c"=>"santosh"];
$ar4 = ["b"=>"ramesh", "e"=>"bhanu",30];

//Today:


//1. array_slice()

//Syntax: array_slice(array, start, length, preserve)

//            -8  -7   -6  -5  -4  -3  -2  -1
//             0   1   2   3   4   5   6   7
$arr1 = array("a","b","c","d","a","b","b","b");

$arr2 = array("a"=>"aman","b"=>"bhanu","c"=>"city","d"=>"dehradun");

$arr3 = array("1"=>"apple","2"=>"banana","3"=>"grapes","4"=>"carrot");

//       0 1 2 3  4  5
$arr4 = [2,4,5,10,44,80];

//print_r($arr3);

//$newArr = array_slice($arr4,2,3);
//print_r($newArr);

//$newArr = array_slice($arr1,-5,4);
//print_r($newArr);

$newArr = array_slice($arr3,1,2,true);
//print_r($newArr);


$arr1 = array("a","b","c","d","a","b","b","b");
$arr2 = array("a"=>"aman","b"=>"bhanu","c"=>"city","d"=>"dehradun");
$arr3 = array("1"=>"apple","2"=>"banana","3"=>"grapes");
$arr4 = [2,4,10];

//print_r(array_count_values($arr));
//print_r(count($arr));
//print_r(sizeof($arr));
//array_product();


//$arrArr = array_count_values($arr1);
//print_r($arrArr);

//$arr = count($arr3);
//echo $arr;

//$arr = sizeof($arr2);
//echo $arr;

//array_product()
//echo array_product($arr4);



//echo "\n ----------------------------------------------------- \n";

//echo "array_keys(), array_key_first(), array_key_last(), array_key_exists(), key_exists(), array_flip()";


//1. array_keys(),
//2. array_key_first()
//3. array_key_last()
//4. array_key_exists()
//5. array_flip()
//Syntax: array_keys(array,value,strict);


$products = ["name"=>"laptop", "qty"=>2, "price"=>30000];
//print_r($products);

//1. array_flip()
//$newArr = array_flip($products);
//print_r($newArr);

//2. array_keys()
//$newArr = array_keys($products);
//print_r($newArr);

//3. array_key_first()

//$newArr = array_key_first($products);
//print_r($newArr);

//$newArr = array_key_last($products);
//print_r($newArr);

/*
$newArr = array_key_exists("id", $products);
$newArr = key_exists("id", $products);

if($newArr){
  echo "Key found";
}else{
  echo "Key not found";
}
*/


//array_fill(), array_fill_keys();


//1. array_fill()
//$start=3;
//$no=5;
//$val="php";

//$newArr = array_fill($start,$no,$val);

//$newArr = array_fill(3,5,"php");


//2. array_fill_keys()
$arr = array("a","b","c","d");
/*
$val = "test";

$newArr = array_fill_keys($arr,$val);

echo "<pre>";
print_r($newArr);
echo "<pre/>";

echo "\n";
*/


//array_merge()

//$arr_merge = array_merge($ar3,$ar4);

//echo "<pre>";
//print_r($arr_merge);
//print_r($ar3 + $ar4);
//echo "</pre>";


//array_merge_recursive()
/*
$arr_mer_rec = array_merge_recursive($ar3,$ar4);
echo "<pre>";
print_r($arr_mer_rec);
echo "</pre>";
*/

//is_array()

/*
if(is_array($n1)){
 echo "Yes";
}else{

 echo "No";
}
*/

//in_array()
/*
if(in_array(2,$n1)){
  echo "Value is in array";
}else{
  echo "Value is not in array";
}
*/

/*
//array_unique()
$names = array("ajay","ram","sonu","rohit","zubin","ajay");
$n=array_unique($names);
echo "<pre>";print_r($n);
*/

//array_combine()
/*
$arrsCombined = array_combine($n1,$users);
echo "<pre>";print_r($arrsCombined);
*/

//array_push()
/*
echo "<pre>";print_r($users);
echo "No of elements: ".array_push($users,"rekha");
echo "<pre>";print_r($users);
*/

//array_pop()
/*
echo "<pre>";print_r($users);
echo "Removed Element: ".arrray_pop($users);
echo "<pre>";print_r($users);
*/

//array_shift()
/*
echo "<pre>";print_r($users);
echo "Removed Element: ".array_shift($users);
echo "<pre>";print_r($users);
*/
//array_unshift()
/*
echo "<pre>";print_r($users);
echo "Added Element: ".array_unshift($users,"sonu");
echo "<pre>";print_r($users);
*/



?>
