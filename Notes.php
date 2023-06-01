<?php
	
//1. Categories & Subcategories are in Same Table: Check Notes.php file about cat table
//Calling recursion function
echo showcategory(0)

//Showing Categories & Subcategories
function showcategory($parent_id) {

$sql = "select * from categories where parent_id='".$parent_id."'";
$result = mysqli_query($GLOBALS['conn'],$sql);
$output="<ul>\n";

while($data=mysqli_fetch_array($result)){
  $output .="<li>\n".$data['category_name'];
  $output .= showcategory($data['id']);
  $output .="</li>";
}

  $output .="</ul>";
  return $output;

}


//-----------------------------------------------------------------------

?>