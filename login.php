<?php
   declare(strict_types = 1);
   session_start();
   
   if( isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
     return header('location: dashboard.php');
   }
   
   $message = '';
   
   if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['submit'])){
     if(isset($_POST['submit'])){
     
     $empName = validate($_POST['emp_name']);
     $empPass = validate($_POST['emp_pass']);
   
       login($empName, $empPass);
     }
   }
   
   
   function login($empName, $empPass){
    include 'db.php';
    $sql = 'select emp_name,emp_pass from employees';
    $qry = mysqli_query($conn,$sql);
    $auth = mysqli_fetch_assoc($qry); 
   
      if($auth['emp_name'] == $empName && $auth['emp_pass'] == $empPass){
       
         $_SESSION['logged_in'] = true;
         $_SESSION['emp_name'] = $auth['emp_name'];
         $_SESSION['emp_pass'] = $auth['emp_pass'];
   
         return header('location: dashboard.php');
      }else{
          echo "Invalid Credentials, Try again";
      }
   
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
      <link rel="stylesheet" href="/bootstrap5/css/bootstrap.min.css" rel="stylesheet">
      <title>Hello, world!</title>
   </head>
   <body>
      <div class="container">
         <div class="row">
            <div class="col-lg-5">
               <form name="frmUser" method="post" action="">
                  <div class="message text-center"><?php if($message!="") { echo $message; } ?></div>
                  <h1 class="text-center">Login</h1>
                  <div>
                     <div class="row">
                        <label> Username </label> 
                        <input type="text" name="emp_name" class="full-width form-control" required>
                     </div>
                     <div class="row">
                        <label>Password</label> 
                        <input type="password" name="emp_pass" class="full-width form-control" required>
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
   </body>
</html>
<style type="text/css">
</style>
<script type="text/javascript">
   $(function(){ 
   
   });
   
</script>
