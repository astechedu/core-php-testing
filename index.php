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

  <?php   

    include 'dbcon.php';
    
    //Object create_function(args, code)
    $db_conn = new dbcon();   


    //User Registration   
    echo  $id = isset($_POST['id']) ? $_POST['id'] : '';

     if($_SERVER['REQUEST_METHOD'] == 'POST'){
   
      if(isset($_POST['name']) && $_POST['name']=='edit'){
         echo "Edit";
      }

      $id = isset($_POST['id']) ? $_POST['id'] : ''; 
      $name = isset($_POST['name']) ? $_POST['name'] : '';       
      $salary = isset($_POST['salary']) ? $_POST['salary'] : '';   
      $city = isset($_POST['city']) ? $_POST['city'] : '';
      
            //Inserting data
      if($db_conn->insert($id,$name,$salary,$city)){
        echo "<div class='alert alert-info'>Data successfully inserted</div>";
        //echo "Data successfully inserted";  

      }else{
        echo "Not inserted try again";
      }      
       
    }


    //User Deatins
    function userDetails() {

    }

  ?>

<!-- Content -->
<?php include 'partials/content.php'; ?>





<script type="text/javascript">

$(function(){


 });

</script>