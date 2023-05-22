<?php 
 declare(strict_types=1);
  session_start();

  if(!$_SESSION['loggedin'] == true){
     
     header('location: blog.php');
  }


   include 'db.php'; 
   $db = new db();

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                                          
    if(isset($_POST['submit'])){

      $author = validate($_POST['name']);
      $title = validate($_POST['title']);

      $post = validate($_POST['post']);
      $city = validate($_POST['city']);
      $password = validate($_POST['password']);
      $role = validate($_POST['role']);
      //$admin_name = validate($_POST['admin_name']);
      //$admin_password = validate($_POST['admin_password']);
   
      $user = $db->addPost($author,$title,$post,$city,$password,$role);

      if($user == true){ 
        echo "User saved...";
      }else{
         //echo "User not saved...";
        header('location: add.php');
      }
      
    }
} 

 function validate($data) {
    $data = trim($data);
    return $data;
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


    <title>Add Posts</title>
  </head>
  <body>

  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <form name="frmUser" method="post" action="">
            <div class="message text-center"></div>

            <h1 class="text-center">Add Posts</h1>
            <a href="admin_dashboard.php">Home</a>
            <div class="m-2">Profile: <strong><?= $_SESSION['author'] ?></strong></div>
            <div>
                <div class="row">
                    <label> Author </label> 
                    <input type="text" name="name" class="full-width form-control" required>
                </div>

                <div class="row">
                    <label>Title</label>  
                    <input type="text" name="title" class="full-width form-control" required>
                </div>

                <div class="row">
                    <label>Post</label> 
                    <input type="text" name="post" class="full-width form-control" required>
                </div>

                <div class="row">
                    <label>City</label> 
                    <input type="text" name="city" class="full-width form-control" required>
                </div>

                <div class="row">
                    <label>Password</label> 
                    <input type="text" name="password" class="full-width form-control" required>
                </div>

                <div class="row">                 
                
                    <select class="form-select mt-2" aria-label="form-control" name="role" required>
                      <option selected>Role</option>
                      <option value="admin">Admin</option>
                      <option value="user">User</option>
                    </select>

                </div>

                <div class="row">
                    <input type="submit" name="submit" value="Submit" class="full-width form-control btn btn-info mt-2">
                </div>

            </div>
        </form>
      </div>

    </div>
  </div>


      <script src="/bootstrap5/js/bootstrap.bundle.min.js"></script>
      <script src="/bootstrap5/js/jquery.min.js"></script>
      <script type="text/javascript" src="/site.js"></script>
    
</body>
</html>
