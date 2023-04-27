<?php
  declare(strict_types=1);
  session_start();

  if(!$_SESSION['loggedin'] == true){
     
     header('location: blog.php');
  }




  if(isset($_REQUEST['logout']) && $_REQUEST['logout'] !='') {
   
     unset($_SESSION['loggedin']);
     unset($_SESSION['author']);
     session_destroy();           
  }






?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap5/css/bootstrap.min.css">
 

    <title>Admin Dashboard</title>
  </head>
 <body>  
   
   <div class="container">
   	<div class="row">

      <a href="blog.php" class="link-info">Home</a>

  
    <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
    <a href="" id="logout">Logout</a>
    <?php } ?>


      <div class="card">
      	<div class="card-header bg-info"><h1>Admin Panel</h1></div>

      	<div class="card-body">
      		<span>Total Posts: 13</span>
      		<p>
      			<div>Login: <strong><?= $_SESSION['author'] ?></strong></div>
      			<div>Athors Details: Ddn</div>
      			<div>No of Athors: 100</div>
      			<div>Popular Posts: 100</div>
      			<div>No of Posts: 900</div>
      		</p>

      	</div>

        <div class="col-md-2">Admin Profile</div>
        <div class="col-md-2">Admin Contact Us</div>

        <div class="col-md-8 d-flex flex-row">
            <div class="p-2"><a href="edit.php" class="btn btn-info">Edit Post</a></div>
            <div class="p-2"><a href="listing.php" class="btn btn-info">Listing Post</a></div>
            <div class="p-2"><a href="delete.php" class="btn btn-danger">Delete Post</a></div>
            <div class="p-2"><a href="add.php" class="btn btn-success">Add Post</a></div>
    	</div>

      	<div class="card-footer"></div>

      </div>
      
   	</div>
   </div>

      <script src="/bootstrap5/js/bootstrap.bundle.min.js"></script>
      <script src="/bootstrap5/js/jquery.min.js"></script>
      <script type="text/javascript" src="/site.js"></script>

 </body>
 </html>

