<?php   
session_start();

//session_destroy($_SESSION['shopping_cart']['counter']);
//session_destroy($_SESSION['shopping_cart'][0]);

 //session_delete($_SESSION['shopping_cart']['counter']);
//session_destroy($_SESSION['shopping_cart']);

//echo "<pre>"; print_r($_SESSION['shopping_cart']);

//echo "<br>";

//Adding Products to shopping cart
/*
if(!empty($_POST["quantity"])) {
    $productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
    $itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
    
    if(!empty($_SESSION["cart_item"])) {
      if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
        foreach($_SESSION["cart_item"] as $k => $v) {
            if($productByCode[0]["code"] == $k) {
              if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                $_SESSION["cart_item"][$k]["quantity"] = 0;
              }
              $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
            }
        }
      } else {
        $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
      }
    } else {
      $_SESSION["cart_item"] = $itemArray;
    }
  }
  */


/*
$myfile = fopen("../addtocart/records.php", "a") or die("Unable to open file!");
$txt = '["id" => "'.$id.'","name" => "'.$name.'", "price" => "'.$price.'", "quantity" => "'.$qty.'"]';
fwrite($myfile, $txt);
fclose($myfile);
*/


            //Inserting data
      //if($db_conn->insert($id,$name,$salary,$city)){
        //echo "<div class='alert alert-info'>Data successfully inserted</div>";
        //echo "Data successfully inserted";  

      //}else{
        //echo "Not inserted try again";
      //}      
       
  ?>


<!-- header -->  
<header>   
<div class="container">
<?php include 'header.php';?>

<!-- navbar -->
<?php include 'nav.php';?>
</div>
</header>

<!-- Cart Design 2 Start -->

<section class="h-100" style="background-color: #eee;">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
          <div>
            <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i
                  class="fas fa-angle-down mt-1"></i></a></p>
          </div>
        </div>

  
       <?php if(isset($_SESSION['shopping_cart'] )){ ?>
        
        <?php foreach($_SESSION['shopping_cart'] as $cart) { ?>        
 
        <div class="card rounded-3 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                <img
                  src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                  class="img-fluid rounded-3" alt="Cotton T-shirt">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2"><?= $cart['name'] ?></p>
                <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p>
              </div>
              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                  <i class="fas fa-minus"></i>
                </button>

                <input id="form1" min="0" name="quantity" value="<?php echo $cart['quantity'] ?>" type="number"
                  class="form-control form-control-sm" id="qty" />

                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <h5 class="mb-0">$<span id="price"><?= $cart['price'] ?></span></h5>
              </div>
              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <?php } } ?>

        <div class="card mb-4">
          <div class="card-body p-4 d-flex flex-row">
            <div class="form-outline flex-fill">
              <input type="text" id="form1" class="form-control form-control-lg" />
              <label class="form-label" for="form1">Discound code</label>
            </div>
            <button type="button" class="btn btn-outline-warning btn-lg ms-3">Apply</button>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <button type="button" class="btn btn-warning btn-block btn-lg">Proceed to Pay</button>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


<!-- Cart Design 2 End -->


<script src="../bootstrap5/js/jquery.min.js"></script>
<script src="../bootstrap5/js/bootstrap.bundle.min.js"></script>


<!-- footer -->
<footer>
<div class="container">
  <?php include 'footer.php';?>
</div>
</footer>




<script>


   var total = 0;
   let  q = document.getElementById('qty').value;
   //let price = Number(document.getElementById('price').textContent); 
   //total = qty * price;

   alert(q);
   console.log(total);

</script>