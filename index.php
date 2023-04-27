<?php
  declare(strict_types = 1);


  session_start();


     echo "<br>";


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

  <div class="container">

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Register
</button>

  <div class="row">   
   <div class="col-md-5">
       <caption>Users Listing</caption>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th><th>Name</th><th>Salary</th><th>City</th><th>Actions</th>
            </tr>
          </thead>
          <tbody>    
            <?php foreach($db_conn->fetchall() as $record) { ?>     
              <tr>    
      <td>
        <?= $record['id'] ?></td> <td><?= $record['name'] ?></td>
         <td><?= $record['salary'] ?></td> <td><?= $record['city'] ?></td> 
        <td> 
        <a href="/?action=d&id=<?= $record['id'] ?>" class="btn btn-xs btn-danger">Trash</a>           
       <!-- <a href="/?action=e&id=<?= $record['id'] ?>" class="btn btn-xs btn-info">Edit</a> -->
                  <!-- Rrash -->
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" id="edit">
            Edit
          </button>

        <!-- <a href="/?action=v&id=<?= $record['id'] ?>" class="btn btn-xs btn-success" id="view">View</a> -->
           <input type="hidden" name="id" value="<?= $record['id'] ?>" id="vid">
           <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalView" id="view">
            View
          </button>              
        </td> 
        </tr> <?php } ?>                                        
</tbody>
</table> 
</div>

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


<!-- User Register -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
        <input type="number" name="id" value="" class="form-control m-2" placeholder="ID" id="id">
        <input type="text" name="name" value="" class="form-control m-2" placeholder="Name" id="name">
        <input type="number" name="salary" value="" class="form-control m-2" placeholder="Salary" id="salary">
        <input type="text" name="city" value="" class="form-control m-2" placeholder="City" id="city">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="mbtn">Save</button>
        <input type="submit" name="submit" value="Register" class="btn btn-info form-control" id="msbt">
      </form>
      </div>
    </div>
  </div>
</div>


<!-- User View -->
<div class="modal fade" id="exampleModalView" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="mview">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
        <input type="number" name="id" value="" class="form-control m-2" placeholder="ID" id="vid">
        <input type="text" name="name" value="" class="form-control m-2" placeholder="Name" id="vname">
        <input type="number" name="salary" value="" class="form-control m-2" placeholder="Salary" id="vsalary">
        <input type="text" name="city" value="" class="form-control m-2" placeholder="City" id="vcity">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="vmbtn">View</button>
      </form>
      </div>
    </div>
  </div>
</div>
  

    <script src="/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="/bootstrap5/js/jquery.min.js"></script>
   
  </body>
</html>


<style type="text/css">
   #registerform{display: none;}
</style>


<script type="text/javascript">

    $(function(){

       $('#edit').on('click', function(){
         $('#msbt').css('display','none');
         $('#mbtn').text('Edit');
         //$('#msbt').attr('name','edit')
        // id = $("$id").val();
       });     

       $('#view').on('click', function(){         
           //$('#vid').attr('id');
           id = $("#vid").val();

          $.ajax({
             url:"",
             type:"post",
             data: {"id":id},
             dataType:'json'
           });

       }); 

       $('#mbtn').on('click', function(){

         id     = $('#id').val();
         name   = $('#name').val();
         salary = $('#salary').val();
         city   = $('#city').val();
         //data = {id:id,name:name,salary:salary,city:city};

         $.ajax({
           url:"",
           type:"post",
           data: {"id":id,"name":name,"salary":salary,"city":city},
           dataType:'json'
         });         

         //$('#mbtn').text('Edit');
         //$('#msbt').attr('name','edit')
        // id = $("$id").val();
       });

 });

</script>