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
      <?php echo showcategory(0) ?>
      

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
    <?php categoryTree(0); ?>
</select>




   </body>
</html>
<!-- Footer -->
<footer id="footer">
   <?php include '../partials/footer.php'; ?>
</footer>
