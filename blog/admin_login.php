<?php
  declare(strict_types=1);
  session_start();

  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
     
     header('location: blog.php');
  }


//include  'db.php';
//$db = new db();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['submit'])){

      $admin_name = validate($_POST['admin_name']);
      $admin_password = validate($_POST['admin_password']);

      $user = login($admin_name,$admin_password);      

      //echo "<pre>";print_r($user);   
    
      if( $user[0]['name'] == $admin_name && $user[0]['password'] == $admin_password ){
            
            $_SESSION['loggedin'] = true;
            $_SESSION['author'] = $admin_name;

            header('location: admin_dashboard.php');

      }else{

         //echo "Invalid Credential";
          //include 'admin_login.php';                        
            header('location: admin_login.php?invalid=invalid credentials');                    

      }
    }
}


 function login($admin_name,$admin_password) {
     include  'db.php';
     $db = new db();
     $user = $db->authenticate($admin_name,$admin_password);   

     return $user;    

 }

 function validate($data) {
 	$data = trim($data);
 	return $data;
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
   
    <title>Hello, world!</title>
  </head>
  <body>

  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <form name="frmUser" method="post" action="">
            <div class="message text-center"></div>

            <h1 class="text-center">Admin Login</h1>

            <div>
                <div class="row">
                    <label> Username </label> 
                    <input type="text" name="admin_name" class="full-width form-control" required >
                </div>
                <div class="row">
                    <label>Password</label> 
                    <input type="password" name="admin_password" class="full-width form-control" required>
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
