<?php
session_start();
  include '../databases/db.php';  
       //$data = $db->select($pdo);
       //echo "<pre>";print_r($data);
        //print_r($db->authenticate($pdo,'ajay','dehradun'));
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Home</title>
   </head>
   <body>
      <!-- Header -->
      <header id="header">
         <?php include '../partials/header.php'; ?>
      </header>
      <!-- Header -->
      <navbar id="navbar">
      <div class="container">
         <?php include '../partials/navbar.php'; ?>
      </div>
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
                        <?php if(isset($_SESSION['logged_in'])) { ?>
                        <th scope="col">Actions</th>
                        <?php } ?>
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
                        <?php if(isset($_SESSION['logged_in'])) { ?>
                        <td scope="col">
                           <a href="#" class="btn btn-info">Edit</a>
                           <a href="#" class="btn btn-danger">Remove</a>
                           <a href="#" class="btn btn-success">View</a>
                        </td>
                        <?php } ?>		      
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
