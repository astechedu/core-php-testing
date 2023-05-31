<?php


// Keys: 
  
  //1. Categories and Subcategories in a Single Table
  //2. Categories and Subcategories in Diff Tables



//----------------------------------------------------------------------------------------------------
  

  //1. Categories and Subcategories in a Single Table

   //https://dcblog.dev/mysql-categories-and-subcategories   //Notes


	CREATE TABLE `categories` (
	  `id` int(11) NOT NULL AUTO_INCREMENT,
	  `parent_id` int(11) NOT NULL DEFAULT '0',
	  `category` varchar(255) NOT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `categories` (`id`, `parent_id`, `category`) VALUES
(1, 0, 'General'),
(2, 0, 'PHP'),
(3, 0, 'HTML'),
(4, 3, 'Tables'),
(5, 2, 'Functions'),
(6, 2, 'Variables'),
(7, 3, 'Forms');


//Database
$host = "localhost";
$database = "categories";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$host;dbname=$database", $username, $password);

//turn on exceptions
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//set default fetch mode
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);




//Now select all root categories:

$categories = $db->query('SELECT id, parent_id, category FROM categories WHERE parent_id = 0 ORDER BY category');


<ul>
<?php
foreach($categories->fetchAll() as $row) {

    echo "<li>$row->category</li>";

    //get child categories
    $children = $db->prepare('SELECT id, parent_id, category FROM categories WHERE parent_id = ? ORDER BY category');
    $children->execute([$row->id]);

    //determine if there are child items
    $hasChildren = $children->rowCount() > 0 ? true : false;

    if ($hasChildren) {
        echo "<ul>";
    }

    foreach($children->fetchAll() as $child) {
        echo "<li>$child->category</li>";
    }

    if ($hasChildren) {
        echo "</ul>";
    }

}
?>
</ul>

One issue this setup is if there are another level of subcategories they would not be displayed unless another loop is added.

Let's tackle this, select all categories regardless of the parent. Add all the results as an array and pass them to a function called generateTree.

$categories = $db->query('SELECT id, parent_id, category FROM categories ORDER BY category');
$rows = $categories->fetchAll(PDO::FETCH_ASSOC);
echo generateTree($rows);

This function will loop itself and show the title, and will recall the function for the depth needed until all loops have finished.

function generateTree($data, $parent = 0, $depth=0)
{
    $tree = "<ul>\n";
    for ($i=0, $ni=count($data); $i < $ni; $i++) {
        if ($data[$i]['parent_id'] == $parent) {

            $tree .= "<li>\n";
            $tree .= $data[$i]['category'];
            $tree .= generateTree($data, $data[$i]['id'], $depth+1);
            $tree .= "</li>\n";
        }
    }
    $tree .= "</ul>\n";
    return $tree;
}



//Which outputs the following based on this data:

INSERT INTO `categories` (`id`, `parent_id`, `category`) VALUES
(1, 0, 'General'),
(2, 0, 'PHP'),
(3, 0, 'HTML'),
(4, 3, 'Tables'),
(5, 2, 'Functions'),
(6, 2, 'Variables'),
(7, 3, 'Forms'),
(8, 5, 'sub 1'),
(9, 8, 'sub 2');



//

    General
    HTML
        Forms
        Tables
    PHP
        Functions
        Variables

    General
    HTML
        Forms
        Tables
    PHP
        Functions
            sub 1
                sub 2
        Variables

Fathom Analytics $10 discount on your first invoice using this link 



















//----------------------------------------------------------------------------------------------------

//2. Categories and Subcategories in Diff Tables



//Dynamic Category and Subcategory in PHP Using MySQL
//https://codingstatus.com/how-to-create-category-and-subcategory-in-php/     // Notes

// In different tables

1. Configure Basic Requirement


myproject/
|__catsubcat-form.php
|__catsubcat-script.php
|__database.php
|__style.css



CREATE TABLE `categories` (
  `id` int(10) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT 0,
  `category_name` varchar(255) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT 0,
  `subcategory_name` varchar(255) DEFAULT NULL,
)


//database.php

 
$hostname     = "localhost";
$username     = "root";
$password     = "";
$databasename = "codingstatus.com";
// Create connection
$conn = mysqli_connect($hostname, $username, $password,$databasename);
// Check connection
if (!$conn) {
    die("Unable to Connect database: " . mysqli_connect_error());
}




//Create a category and subcategory Form

//catsubcat-form.php

 <?php
include('category-script.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<title>Category and SubCategory in PHP</title>
<style type="text/css">
  
.right-col{
    width: 75%;
    float: right;}
body{
    overflow-x: hidden;}
.left-col form {
    height: 100vh;
    border: 2px solid #f1f1f1;
    padding: 16px;
    background-color: white; }
.left-col{
    width: 20%;
    float: left;
    background: #f1f1f1;
    height: 100vh;}
.left-col a{
  text-decoration: none;
  font-size: 20px;
  color: orangered;
  line-height: 30px}
.left-col ul{
  list-style-type:none;
}
.form input, .form select{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;}
.form select{
    width:109%;}
.form input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;}
.form button[type=submit] {
    background-color: #434140;
    color: #ffffff;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 111%;
    opacity: 0.9;
    font-size: 20px;}
.form label{
  font-size: 18px;;}
.form button[type=submit]:hover {
  background-color:#3d3c3c;}
.form-title a, .form-title h2{
   display: inline-block;}
.form-title a{
      text-decoration: none;
      font-size: 20px;
      background-color: green;
      color: honeydew;
      padding: 2px 10px;}
 .form{
  width:30%;}
</style>
</head>
<body>
<!--====form section start====-->
<div class="left-col">
<ul>
  <li><a href="category-form.php?add=add-category">Add Category</a></li>
  <li><a href="category-form.php?add=add-subcategory">Add Subcatgory</a></li> 
</ul>       
</div>
<!--====form section start====-->
<div class="right-col">
<div class="form">
<p style="color:red">
        
<?php if(!empty($msg)){echo $msg; }?>
        </p> 
        
<?php
 echo $add=$_GET['add']??'';
 switch ($add) {
 case 'add-category':
         
?>
<!--==== category form=====-->
<div class="form-title">
<h2>Create Category</h2>
</div>
<form method="post" action="">
   <label>Category</label>
   <input type="text" placeholder="Enter Full Name" name="category_name" required>
    <button type="submit" name="addcat">Add category</button>
</form>
<!--=======subcategory form====-->
             
<?php
     break;
     case 'add-subcategory':
         
?>
 <!--==== subcategory form=====-->
 <div class="form-title">
 <h2>Create Subcategory</h2>
 </div>
<form method="post" action="">
     <label>Category</label>
     <select name="parent_id">
             
<?php
foreach ($catData as $cat) {
?> <option value="<?php echo $cat['id']; ?>"> <?php echo $cat['category_name']; ?>
</option>
<?php } ?>
      </select>
    <label>Subcategory</label>
    <input type="text" placeholder="Enter Full Name" name="subcategory_name" required>
    <button type="submit" name="addsubcat">Add subcategory</button>
 </form>
 <!--=======subcategory form====-->
             
<?php
      break;
      
      default:
     
?>
<h3>Category and subcategory </h3>
             
<?php
      break;
    }
    
?>
        
    </div>
  </div>
</body>
</html>


//3. Create Category and Subcategory in PHP


    create_category($conn) can insert category data into the database
    create_subcategory($conn) can insert subcategory data into the database
    fetch_categories($conn)  can fetch category data from the database
    fetch_subcategories($conn,$parent_id) can fetch subcategory data from the database
    legal_input($value)  can validate category and subcategory data before inserting it into the database


//catsubcat-script.php


<?php

include('database.php');
if(isset($_POST['addcat'])){
   $msg=create_category($conn);     
}
if(isset($_POST['addsubcat'])){
    $msg=create_subcategory($conn);     
}

function create_category($conn){
      $category_name= legal_input($_POST['category_name']);
      $query=$conn->prepare("INSERT INTO categories (category_name) VALUES (?)");
      $query->bind_param('s',$category_name);
      $exec= $query->execute();
      if($exec){
         $msg=" Category was created successfully";
         return $msg;
      }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($conn);
      }
}


function create_subcategory($conn){
      $parent_id= legal_input($_POST['parent_id']);
      $subcategory_name= legal_input($_POST['subcategory_name']);
      $query=$conn->prepare("INSERT INTO subcategories (parent_id,subcategory_name) VALUES (?,?)");
      $query->bind_param('is',$parent_id,$subcategory_name);
      $exec= $query->execute();
      if($exec){
        $msg="Subcategory was created sucessfully";
        return $msg;
      }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($conn);
      }
}

// fetch query

$catData=fetch_categories($conn);

function fetch_categories($conn){ 
  $parent_id=0;
  $query = $conn->prepare('SELECT * FROM categories WHERE parent_id=?');
  $query->bind_param('i',$parent_id); 
  $query->execute();
  $exec=$query->get_result();

  $catData=[];
  if($exec->num_rows>0){
    while($row= $exec->fetch_assoc())
    {
        $catData[]=[
          'id'=>$row['id'],
          'parent_id'=>$row['parent_id'],
          'category_name'=>$row['category_name'],
          'subcategories'=>fetch_subcategories($conn,$row['id'])
        ];  
   }
   return $catData;
        
  }else{
    return $catData=[];
  }
}

// fetch query

function fetch_subcategories($conn,$parent_id){
  $query = $conn->prepare('SELECT * FROM subcategories WHERE parent_id=?');
  $query->bind_param('i',$parent_id); 
  $query->execute();
  $exec=$query->get_result();

  $subcatData=[];
if($exec->num_rows>0){
    while($row= $exec->fetch_assoc())
    {
        $subcatData[]=[
          'id'=>$row['id'],
          'parent_id'=>$row['parent_id'],
          'subcategory_name'=>$row['subcategory_name'],
          
        ];  
   }
   return $subcatData;
        
  }else{
    return $subcatData=[];
  }
}
// convert illegal input to legal input
function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>


//4. Display category and subcategory


//catsubcat-list.php



 <?php

include('category-script.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<title>Category and SubCategory in PHP</title>

</head>
<body>
<!--=====category subcategory list=====-->
    
<?php

  foreach ($catData as $cat) {
      
?>

     <ul>
      <li>
          
<?php echo $cat['category_name']; ?>

              </li>
       <ul>
              
<?php
$subcatData=$cat['subcategories'];
        foreach ($subcatData as $subcat) {
            
?> <li><?php echo $subcat['subcategory_name']; ?></li> <?php

        }
      
?>

       </ul>
       </ul>
          


</body>
</html>








































































?>