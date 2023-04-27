<!-- header -->  
<header>   
<div class="container">
<?php include 'partials/header.php';?>

<!-- navbar -->
<?php include 'partials/navbar.php';?>
</div>
</header>

<!-- carousel -->
<?php include 'partials/carousel.php'; ?>

<!-- content -->

<div class="container">
  <?php include 'partials/content.php'; ?>
</div>

<!-- About Us -->
<section id="about">  
  <div class="container">
   <?php include 'partials/about.php'; ?>
 </div>
</section>

<!-- Services -->
<section id="services"> 
  <div class="container">
   <?php include 'partials/services.php'; ?>
 </div> 
</section>

<!-- Contact -->
<section id="contact">  
   <div class="container">
     <?php include 'partials/contact.php'; ?>
   </div> 
</section>

<!-- footer -->
<footer>
<div class="container">
<?php include 'partials/footer.php';?>
</div>
</footer>


<style>
  html {
  scroll-behavior: smooth;
}
</style>


<script type="text/javascript">
  
  $(function() {
     $("#addtocart").on('click', function(){
     alert();
       let product_name = $("#product_name").val();
       let product_price = $("#product_price").val();

        $.ajax({
          type:"POST",
          url:"localhost/shopping/cart.php",
          data: {product_name:product_name,product_price:product_price}         

        });

     });
  })

</script>