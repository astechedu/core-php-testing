<?php     
session_start();

$db_conn = new dbcon();   
  
//Searching Categories By Category Name 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  
  if(isset($_POST['cat_name']) && trim($_POST['cat_name']) != ''){
      
      //$productsByCatName=$db_conn->fetchByCategoryName($_POST['cat_name'])?? '';
   if($db_conn->fetchByCategoryName($_POST['cat_name'])){

          $productsByCatName=$db_conn->fetchByCategoryName($_POST['cat_name']);

   }else{ 

          $productsByCatName=$db_conn->fetchByJoin();
        }

  }else{

      $productsByCatName=$db_conn->fetchByJoin();
  }

}else{

    $productsByCatName=$db_conn->fetchByJoin(); 
}
    

?>


<!--Header -->
<?php include 'partials/header.php'; ?>

<!-- Nav -->
<?php include 'partials/nav.php' ;?>

<!-- Slider -->
<?php include 'partials/top_slider.php' ;?>

<section>
<div class="container"> 

<!-- Button trigger modal -->
<!--
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Register
  </button>
-->

 <span id='mess' class="text-success"><?php echo $_SESSION['message']?? '' ?>
   <?php unset($_SESSION['message']) ?>
 </span>

<!-- Card Product Listing -->
  <div class="row">   

  <?php foreach($productsByCatName as $product) { ?>
   
    <div class="card m-2" style="width: 16rem;">
      <div class="card-heading"><?= $product['name'] ?></div>
      <a href="feature.php">
        <img src="../images/<?= $product['img'] ?>" class="card-img-top img-thumbnail" alt="...">
      </a>
      <div class="card-body">        
        <div class=""><?= $product['code'] ?></div>
        <h5 class="card-title">$<?= $product['price'] ?></h5>
        <p class="card-text"><?= $product['description'] ?></p>        
        <!--<a href="#" class="btn btn-danger">Buy Now</a>-->

        <form action="partials/manage_cart.php" method="post">
          <input type="hidden" name="id" value="<?= $product['id'] ?>">
          <input type="hidden" name="name" value="<?= $product['name'] ?>">
          <input type="hidden" name="price" value="<?= $product['price'] ?>">
          <input type="hidden" name="quantity" value="<?= $product['quantity'] ?>">
          <input type="hidden" name="code" value="<?= $product['code'] ?>">
          <input type="submit" name="submit" value="submit" class="btn btn-primary">
        </form>

      </div>
    </div>    
  
   <?php } ?>
  
</div>

</div>
</section>

<!-- Scroll Slider  -->
<?php include 'scroll.slider.php' ;?>


<!-- User Register Form -->
<?php //include 'forms/user_register.php' ;?>
  

<!-- User View Form -->
<?php //include 'forms/user_view.php' ;?>
  

<!-- Footer -->
<?php include 'footer.php' ;?>


<style type="text/css">
   #registerform{display: none;}
</style>


<script type="text/javascript">

//1. Jquery:

$(function(){
  //Handling Add To Cart Messages
  $('#mess').fadeOut(2000);
});


//2. JavaScript:

//Display PHP Data into JavaScript
let obj = '<?php echo json_encode($productsByCatName); ?>';
let prod = JSON.parse( obj );

function prods(prod) {
   //console.log(obj);
   for(let p in prod){
     console.log(prod[p].name);
   }
}

prods(prod);
//



  //hideMessage();
  function hideMessage() {
      document.getElementById("mess").style.display = "none";
  };
  setTimeout(hideMessage, 18000);

</script>
