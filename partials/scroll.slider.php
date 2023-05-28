<?php
//Pagination
    //database connection  

//$db_conn = new dbcon();   

//$data = $db_conn->fetchByJoin();
  
?>  

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

<div class="container">
<div class="row">
<div class="col-md-12 d-flex d-flex-row overflow-auto">

   
    <?php foreach($productsByCatName as $product) { ?>
    <div class="col-md-3"> 
    <div class="carousel-inner">
    <div class="carousel-item active">
   

      <img src="..." class="d-block w-100" alt="...">

              <div class="card m-2" style="width: 15rem;">
              <div class="card-heading"><?= $product['name'] ?></div>

                <img src="../images/<?= $product['img'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $product['name']; ?></h5>
                  <p class="card-text">Some quick example text...</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
      
    </div>
    </div>
       </div>
    <?php } ?> 
 

     
  </div>

</div>
</div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>