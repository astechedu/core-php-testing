<?php
//Done:array_push(),array_pop(),array_shift(),array_unshift(),array_unique(),array_combine(),is_array(),in_array()

//Array Function: array_values(),array_unique(),array_count_values(),array_merge(),array_merge_recursive(),array_combine(),array_chunk(),
//                array_column(),array_key(),array_key_exist(),array_change_key_case(),array_diff(),array_diff_uassoc(),array_diff_assoc(),array_diff_keys(),array_diff_ukey(),array_fill(),array_fill_keys(),array_filter(),array_flip(),array_intersect_assoc(),array_intersect_key(),array_intersect(),array_key_exists(),array_keys(),array_key_recursive(),array_multisort(),array_pad(),array_product(),array_rand(),array_reduce(),array_replace_recursive(),array_replace(),array_reverse(),array_search(),array_slice(),array_splice(),array_sum(),array_udiff_assoc(),array_udiff(),array_intersect_assoc(),array_intersect_uassoc(),array_uintersect(),array_walk(),array_walk_recursive(),compact(),count(),current(),end(),extract(),in_array(),is_array(),key(),next(),ksort(),rsort(),list(),natsort(),natcasesort(),pos(),prev(),range(),reset(),shuffle(),sizeof(),sort(),uasort(),uksort(),usort(),each()


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
