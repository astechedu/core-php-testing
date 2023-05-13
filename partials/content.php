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

  ?>

<!--From here page content -->



<!--Header -->
<?php include 'partials/header.php'; ?>

<!-- Nav -->
<?php include 'partials/nav.php' ;?>

  <div class="container">

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Register
</button>


<!-- Users or All Recores Lising On Tables -->
<?php include 'partials/users_table.php'; ?>

</div>

    <!--
    <div class="col-md-4">   
       <form id="registerform" action="" method="post">
          <h1>Register</h1>
          <input type="number" name="id" value="" placeholder="ID" class="form-control">
          <input type="text" name="name" value="" placeholder="Name" class="form-control">
          <input type="number" name="salary" value="" placeholder="Salary" class="form-control">
          <input type="text" name="city" value="" placeholder="City" class="form-control">
          <input type="submit" name="submit" value="Submit" class="form-control btn btn-info ">
       </form>
    </div>
  </div>
  -->

<!-- User Register Form -->
<?php include 'forms/user_register.php' ;?>
  

<!-- User View Form -->
<?php include 'forms/user_view.php' ;?>
  

<!-- Footer -->
<?php include 'partials/footer.php' ;?>



<style type="text/css">
   #registerform{display: none;}
</style>
