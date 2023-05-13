<?php
  declare(strict_types = 1);

  session_start();

?>

     
<?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){?>
     <a href="dashboard.php">Dashboard</a><?php 
}else{ ?> 
     <a href="login.php">Login</a>
     <a href="blog/blog.php">Blog</a>
 <?php }?>



<!-- Content -->
<?php include 'partials/content.php'; ?>



