 <?php

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


//Create Parent Category
if(isset($_POST['submit']) && $_POST['submit'] != ''){

$cat_name = $_POST['cat_name'];
$parent_id = $_POST['parent_id'];
  $sql ="insert into categories(parent_id,category_name)values('".$parent_id."','".$cat_name."')";

  $result = mysqli_query($conn,$sql);
  if($result){
     echo "Inserted";
  }
}

//Video Cats and Sub cats
//https://youtu.be/Jrsh039x5do?t=694

?> 

<!-- Header -->
<header id="header">
<?php include '../partials/header.php'; ?>
</header>

<!-- Header -->
<navbar id="navbar">
<div class="container">
<?php include '../partials/navbar.php'; ?>
</div>
</navbar>

<h1>Add Category</h1>
<div class="container">		
	<div class="row">
		<div class="col-lg-6">		
			<form method="post" action="">

                <select name="parent_id">
                	<option>Select Category & Subcategory</option>
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





