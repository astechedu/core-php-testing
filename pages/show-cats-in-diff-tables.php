<?php
//session_start();
  //include '../databases/db.php';  
       //$data = $db->select($pdo);
       //echo "<pre>";print_r($data);
        //print_r($db->authenticate($pdo,'ajay','dehradun'));


//Database 
$servername = "localhost";
$username = "root";
$password = "";
$db='cats';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";


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

?>


<!DOCTYPE html>
<html>
   <head>
      <title>Home</title>
   </head>
   <body>
      <h1>Showing Categories & Subcategories: Using Recursion</h1>
      <?php //echo showcategory(0) ?>
      

      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <table class="table" border="2">
                  <thead>
                     <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Salary</th>
                     </tr>
                  </thead>
                  <tbody>
                     
                     <tr>
                        <td>A</td>
                        <td>B</td>
                        <td>C</td>
                     </tr>
                    
                  </tbody>
               </table>
            </div>
         </div>
      </div>


<?php
//Second Function
//////////////////////
// Create connection
$conn2 = new mysqli('localhost', 'root','', 'cats');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//Fetching categories
function categoryTree($parent_id = 0, $sub_mark = ''){
    $db = $GLOBALS['conn2'];
   // $db = new mysqli('localhot','root','','cats');
    $query = $db->query("SELECT * FROM categories WHERE parent_id = $parent_id ORDER BY category_name ASC");
   
    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['id'].'">'.$sub_mark.$row['category_name'].'</option>';
            categoryTree($row['id'], $sub_mark.'---');
        }
    }
}

/////////////////  

?>


<select >
    <?php //categoryTree(0); ?>
</select>


   </body>
</html>


<!------ Add Category ------>


<?php
   //Database 
   $servername = "localhost";
   $username = "root";
   $password = "";
   $db = 'cats';
   
   // Create connection
   $conn = mysqli_connect($servername, $username, $password, $db);
   
   // Check connection
   if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
   }
   //echo "Connected successfully";
      
   //Create Parent Category
   if(isset($_POST['submit']) && $_POST['submit'] != ''){
   
   $cat_name = $_POST['cat_name'];
   $id = $_POST['id'];
     $sql ="insert into categories(id,category_name)values('".$id."','".$cat_name."'
     )";
   
     $result = mysqli_query($conn,$sql);
     if($result){
        echo "Inserted";
     }
   }
   
   //Video Cats and Sub cats
   //https://youtu.be/Jrsh039x5do?t=694   
   ?> 


<h1>Add Parent Categories</h1>
<div class="container">
   <div class="row">
      <div class="col-lg-6">
         <form method="post" action="">
            <select name="id"> 
               <option>Select </option>
               <option value="0">Create Parent Category</option>
               <?php 
                  $sqldata="select * from categories";
                  $res = mysqli_query($conn,$sqldata);
                  while($cat = mysqli_fetch_array($res)){ ?>
               <option value="<?= $cat['id'] ?>"><?= $cat['category_name'] ?></option>
               <?php } ?>
            </select>
            <input type="text" name="cat_name" value="" class="form-control" placeholder="Add Category">
            <input type="submit" name="submit" value="Add Category" class="btn btn-info form-control">
         </form>
      </div>
   </div>
</div>
<?php mysqli_close($conn);?>

