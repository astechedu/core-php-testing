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


function showcategory($parent_id){

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


<div class="container" data-aos="fade-up" data-aos-duration="3000">	

	<div class="row">
		<div class="col-lg-12">		
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">ID</th>
		      <th scope="col">Name</th>
		      <th scope="col">Salary</th>
		      <th scope="col">City</th>
		      <th scope="col">Email</th>
		      <th scope="col">Created</th>
		      <th scope="col">Updated</th>

		    </tr>
		  </thead>
		  <tbody>
		  	<?php foreach($db->select($pdo) as $user) { ?>
		    <tr>	    
		      <td><?= $user['id'] ?></td>
		      <td><?= $user['name'] ?></td>
		      <td><?= $user['salary'] ?></td>
		      <td><?= $user['city'] ?></td>
		      <td><?= $user['email'] ?></td>
		      <td><?= $user['created'] ?></td>
		      <td><?= $user['updated'] ?></td>			      
		    </tr>
	        <?php } ?>        
		  </tbody>
		</table>
		</div>
	</div>
</div>



</body>
</html>

<!-- Footer -->
<footer id="footer">
<?php include '../partials/footer.php'; ?>
</footer>

