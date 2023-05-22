<?php 
  declare(strict_types=1);
  session_start();

  if(!$_SESSION['loggedin'] == true){
     
     header('location: blog.php');
  }

   include 'db.php'; 
   $db = new db();


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

    <title>Blog</title>
  </head>
 <body>   

 <div class="container">
 	 <div class="row">
 	 	<h1 class="">Listing All Posts</h1>  

    <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
    <a href="" id="logout">Logout</a>
    <?php } ?>

   <div class="m-2">Profile: <strong><?= $_SESSION['author'] ?></strong></div>
            


       <?php foreach($db->fetchall() as $post) { 
         
       	 if($post['status'] == 1){ ?>

       	      <a href="admin_dashboard.php">Admin</a>       	      

       	 <?php  } break;} ?>

		 <div class="col-md-8">

            <?php foreach($db->fetchall() as $post) { ?>  
            <div class="m-2 p-2 border">
                        
              <div class="">              	
                 <h1><?= $post['title'] ?></h1>
                  <div>Post: <?= ($post['id']) ?></div>
                 <div><?= $post['post'] ?></div>
                 <span><strong>Author:</strong> <?= $post['name'] ?></span>
                 <span><strong>Date:</strong> <?= $post['created_at'] ?></span>
                <!-- Buttons -->
                <div class="d-flex flex-row">
                  <div class="p-2"><a href="#" class="btn btn-info">Edit</a></div>
                  <div class="p-2"><a href="#" class="btn btn-danger">Delete</a></div>
                  <div class="p-2"><a href="#" class="btn btn-success">View</a></div>
                </div>
              </div>              
            </div>
            <?php } ?>

		 </div>    	
 	</div>   
 </div>   


      <script src="/bootstrap5/js/bootstrap.bundle.min.js"></script>
      <script src="/bootstrap5/js/jquery.min.js"></script>
      <script type="text/javascript" src="/site.js"></script>
</body>
</html>