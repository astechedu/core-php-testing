  <?php   
  
session_start();

$db_conn = new dbcon();   

  ?>


<!--Header -->
<?php include 'partials/header.php'; ?>

<!-- Nav -->
<?php include 'partials/nav.php' ;?>


<div class="container">
  <h1 class="">Product Listing</h1>
    <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Register
  </button>

<!-- Card Product Listing -->
  <div class="row">   
  <?php foreach($db_conn->fetchall() as $product) { ?>
   
    <div class="card m-2" style="width: 10rem;">
      <div class="card-heading"><?= $product['name'] ?></div>
      <img src="../images/<?= $product['img'] ?>" class="card-img-top img-thumbnail" alt="...">
      <div class="card-body">        
        <div class=""><?= $product['code'] ?></div>
        <h5 class="card-title">$<?= $product['price'] ?></h5>
        <p class="card-text"><?= $product['description'] ?></p>
        <a href="#" class="btn btn-danger">Buy Now</a>

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

<!-- User Register Form -->
<?php //include 'forms/user_register.php' ;?>
  

<!-- User View Form -->
<?php //include 'forms/user_view.php' ;?>
  

<!-- Footer -->
<?php include 'footer.php' ;?>


<style type="text/css">
   #registerform{display: none;}
</style>
