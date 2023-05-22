<?php 
declare(strict_types=1);
session_start();

   include 'db.php'; 
   $db = new db();

  $searchErr = '';
  $global = false;

  if($_SERVER['REQUEST_METHOD'] == 'POST'){                                                                   
  
      $search = validate($_POST['search']);
   
      $user = $db->search($search);

      if($user == true){ 

        $global = true;
        $searchStr = $search;
        echo "Result available...";
      }else{          
          //$searchStr = $search;
          $global = true;
          //echo $searchErr = "Result not found";
         //echo "User not saved...";
        //header('location: add.php');
      }     
    
} 

 function validate($data) {
    $data = trim($data);
    return $data;
 }

  if(isset($_REQUEST['logout']) && $_REQUEST['logout'] !='') {
   
     unset($_SESSION);
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
    <link rel="stylesheet" href="/bootstrap5/css/style.css">
    <script src="site.js"></script>
    <title>Blog</title>
  </head>
 <body>   

  <!-- Carousel Start -->
 
  <!-- Carousel End -->


 <div class="container" id="ev">

  <!-- Search -->
      <form class="form-horizontal" action="#" method="post">
    <div class="row">
        <div class="form-group d-flex flex-row bd-highlight mb-3">
            <label class="control-label col-sm-4" for="email"><b>Search Posts Information:</b>:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="search" placeholder="search by title">
            </div>
            <div class="col-sm-2">              
             <button id="sbtn" class="btn btn-info">Search</button>
            </div>
        </div>
        <div class="form-group">
            <span class="error" style="color:red;">* <?php echo $searchErr;?></span>
        </div>
         
    </div>
    </form>

    <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
    <a href="" id="logout">Logout</a>
    <?php }else{ ?>
    <a href="admin_login.php" target="__new">Admin Login</a>
    <?php } ?>
  

    <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
    <a href="admin_dashboard.php" class="link-success">Dashboard</a>
    <span>Profile: </span><strong><?= $_SESSION['author'] ?></strong>
    <?php } ?>

  <!-- Search end -->

 	 <div class="row">
 	 	<h1>My Posts</h1>  

       <?php if($global==true){ ?>

       <?php foreach($db->fetchall() as $post) { 
         
       	 if($post['status'] == 1){ ?>

       	      <a href="/blog/admin_login.php">Admin</a>       	      

       	 <?php  } break;} ?>
      

		 <div class="col-md-8">

            <?php foreach($db->search($searchStr) as $post) { ?>  
            <div class="m-2 p-2 border">
                        
              <div class="">              	
                 <h1><?= $post['title'] ?></h1>
                  <div>Post: <?= ($post['id']) ?></div>
                 <div><?= $post['post'] ?></div>
                 <span><strong>Author:</strong> <?= $post['name'] ?></span>
                 <span><strong>Date:</strong> <?= $post['created_at'] ?></span>
              </div>              
            </div>
            <?php } }else{
              $global=false;?>


            <?php $global=false; foreach($db->search(isset($searchStr)) as $post) { ?>  
            <div class="m-2 p-2 border">
                        
              <div class="">                
                 <h1><?= $post['title'] ?></h1>
                  <div>Post: <?= ($post['id']) ?></div>
                 <div><?= $post['post'] ?></div>
                 <span><strong>Author:</strong> <?= $post['name'] ?></span>
                 <span><strong>Date:</strong> <?= $post['created_at'] ?></span>
              </div>              
            </div>


            <?php } $global=false;} ?>

		 </div>   
     <!-- <button onclick="scrollWindow()">Scroll</button> 	-->   
 	</div>   
 </div>   

      <script src="/bootstrap5/js/bootstrap.bundle.min.js"></script>
      <script src="/bootstrap5/js/jquery.min.js"></script>
      <script type="text/javascript" src="/site.js"></script>

</body>
</html>

<script type="text/javascript">

function scrollWindow() {
    window.scrollBy(0, -600);
}


  $(function() {

     $("#sbtn").on('click', function(){

        s = $("#sq").val();
   
          $.ajax({
             type:"POST",
             url: "?",
             data: {search:s},
             dataType: 'json'
          });
     });

  });
 


</script>