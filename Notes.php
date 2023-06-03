<?php
	
//Keys:
        Four Level Categories, 

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


//----------------------------------------------------------------------------------------------
Example: 

//https://codereview.stackexchange.com/questions/53865/displaying-categories-and-subcategories-in-php-having-different-tables


Categories & Subcategories in a single table:

category_id | category_name | category_slug | category_parent | category_order | category_hidden



Categories
-------------------------
cat_ID | cat_name
------------------
4      | Baby & Kids
5      | Bicycles
6      | Boats
7      | Books & Comics
....
13     | Clothes & Accessories
....
35     | Sport & Fitness
36     | Study
....
38     | Toys & Games
....


Subcategories
-------------------------
subcat_ID | cat_ID | extra_cat_ID | subcat_name
------------------------------------------------
....
15        | 4      | 13           | Baby clothes
16        | 4      | 0            | Baby products
17        | 4      | 13           | Kids clothes
18        | 4      | 38           | Toys
19        | 5      | 0            | Bycicles
20        | 5      | 0            | Bycicle gear & Accessories
21        | 6      | 0            | Boat parts
22        | 6      | 0            | Other Boats
23        | 6      | 0            | Power Boats
24        | 6      | 0            | Sailboats
25        | 6      | 35           | Windsurf & Surfing
26        | 7      | 0            | Antiquarian
27        | 7      | 0            | Books
28        | 7      | 38           | Childrens books
29        | 7      | 0            | Comics
30        | 7      | 0            | Magazines & Newspapers
31        | 7      | 36           | Study & Training



Subsubcategories
-------------------------
subsubcat_ID | subcat_ID | subsubcat_name
-----------------------------------------
...
470          | 15        | Baptism outfits
471          | 15        | Bibs
472          | 15        | Body warmers
473          | 15        | Bodysuits
....
496          | 16        | Baby bath
497          | 16        | Baby books
498          | 16        | Baby inserts
499          | 16        | Baby monitors
....
548          | 17        | Belts
549          | 17        | Blouses & Shirts
550          | 17        | Body warmer
551          | 17        | Boots
....
....
740          | 26        | Music
741          | 26        | Navy
742          | 26        | Novel
743          | 26        | Photography
....
....
867          | 30        | Animals
868          | 30        | Arts and Culture
869          | 30        | Branch
870          | 30        | Cars
870          | 30        | Computers
....
....
etc.


$stmt = mysqli_prepare($connect, "SELECT subcategories.subcat_name, subsubcategories.subsubcat_name, subcategories.subcat_ID FROM subcategories INNER JOIN subsubcategories ON subcategories.subcat_ID=subsubcategories.subcat_ID WHERE subcategories.cat_ID = ? OR subcategories.extra_cat_ID = ? ORDER BY subcategories.subcat_name, subsubcategories.subsubcat_name ASC");
mysqli_stmt_bind_param($stmt, "ii", $cat_ID, $cat_ID);
mysqli_stmt_execute($stmt);


//-----------------------------------------------------------------------------------------------


Four Level Categories:










?>