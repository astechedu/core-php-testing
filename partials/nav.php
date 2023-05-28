  <nav class="w-100 p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
          
          <?php $i=0; if(isset($_SESSION['shopping_cart'])) { 
            foreach($_SESSION['shopping_cart'] as $count){ $i++; 
          } } ?>  

            <li class="d-flex flex-row bd-highlight">         

               <a href="http://localhost/partials/cart.php" class="nav-link px-2 text-white bd-highlight">
                <img src="/images/cart.png" class="p-2 bd-highlight" style="width:15%;">
                <?= "<span class='text-danger bg-white rounded-circle border-warning'>".$i."</span>" ?>        
              </a>
          </li>
          
        </ul>
<!--
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>
-->
        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button>
        </div>
      </div>
    </div>

    <!-- Searching Button -->
    <form action="/" method="POST" class="search_cat_frm">  
      <div class="form-group col-md-6 d-flex mx-auto">
      <input type="text" name="cat_name" value="" class="bd-highlight form-control" placeholder="Searching by category" />
      <input type="submit" name="search" value="Search" class="bd-highlight w/3form-control btn btn-md btn-info">
      </div>
    </form>

  </nav>

