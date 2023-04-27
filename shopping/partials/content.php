<?php
declare(strict_types=1);

include 'db.php';

$db = new db();
//print_r($db->fetchall());

?>
<div class="row">
<h1>Products</h1>

<?php foreach($db->fetchall() as $product) { ?>

<div class="card mx-2 shadow" style="width: 18rem;" data-aos="fade-up" data-aos-duration="3000"> 
  <img src="../images/astechedu.png" class="card-img-top" alt="..."> <div
class="card-body"> 
<h5 class="card-title">Card title</h5> 
<p class="card-text">The best quality products</p> 
<div class="d-flux">
<div><strong>Name:</strong><span id="product_name"><?= $product['product_name'] ?></span></div>
<div><strong>Price:</strong><span id="product_price"><?= $product['product_price'] ?></span></div>
</div>
<a href="#" class="btn btn-primary" id="adtocart">Buy now</a> 
</div></div>

<?php } ?>


</div>


