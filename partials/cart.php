<?php   
session_start();

//echo "<pre>"; print_r($_SESSION['shopping_cart']);



$cartRemoveMess='';
if(isset($_POST['remove']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
  
   $code = $_POST['code']?? '';
     if(isset($_SESSION['shopping_cart'])){
        $abc = in_array($code,(array_keys($_SESSION['shopping_cart'])));
        if($abc){ unset(
          $_SESSION['shopping_cart'][$code]); 
          $cartRemoveMess='Cart item code '.$code.' successfully removed';
        } 
     }
  
}


//echo "<br>";

//Adding Products to shopping cart
//echo "<pre>"; print_r(array_map($cartQtys));


//Grand Total of cart items
if(isset($_SESSION['shopping_cart'])){
  $Gtotal=0;
  $cartPrices = array_column($_SESSION['shopping_cart'],'price');
  $cartQtys = array_column($_SESSION['shopping_cart'],'quantity');

  function myfunction($v1,$v2)
  {  
    return $v1*$v2;  
  }

  $cartQtyMultiPri = array_map("myfunction",$cartPrices,$cartQtys);
  $Gtotal = array_sum($cartQtyMultiPri);
}else{
   $Gtotal = '';
}


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
$cartKeys=array();
foreach($_SESSION['shopping_cart'] as $key=>$val) {

  $cartKeys[] = $val;

} 


echo "<pre>"; print_r(($cartKeys));yujj


echo in_array('lap001',$cartKeys);
        

  echo "<pre>";
  print_r(array_column($_SESSION['shopping_cart'],'price'));
*/



error_reporting(0);

$item_id = $_GET["item_id"];
session_start();
if (!empty($_SESSION["incart"])) {
    foreach ($_SESSION["incart"] as $select => $val) {
        if($val["item_id"] == $item_id)
        {
            unset($_SESSION["incart"][$select]);
        }
    }
}


       
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
     <div class="text-danger" id='rmess'><?= $cartRemoveMess ?></div>
      <div class="col-10">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>          
          <span>Grand Total:&nbsp;<strong class="text-warning">$<?= $Gtotal ?></strong></span>
          <div>
            <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i
                  class="fas fa-angle-down mt-1"></i></a></p>
          </div>

        </div>

       <!-- Single Cart Details -->      
       <?php if(isset($_SESSION['shopping_cart'] )){ ?>       
        <?php foreach($_SESSION['shopping_cart'] as $cart) { ?>  
        <!-- Total -->
        <?php 
              $total = $cart['quantity'] * $cart['price'];               
        ?>

        <div class="card rounded-3 mb-2">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                <img
                  src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                  class="img-fluid rounded-3" alt="Cotton T-shirt">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2"><?= $cart['name'] ?>&nbsp;(<span class="text-warning"><?= $cart['code'] ?></span>)</p>
                <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p>
              </div>
              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                  <i class="fas fa-minus"></i>
                </button>
               
                <div class="qt" id="qt">
                <input id="form1" min="0" name="quantity" value="<?php echo $cart['quantity'] ?>" type="number"
                  class="form-control form-control-sm qty" />
                </div>

                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                  <i class="fas fa-plus"></i>
                </button>
              </div>

              <div class="col-md-3 col-lg-3 col-xl-2 offset-lg-1">
                <h5 class="mb-0">$<span id="total" class="text-warning total"><?= $total ?></span></h5>
                <input type="hidden" id="price" value="<?= $cart['price'] ?>" class="price">
              </div>

                <!-- Delete Single Cart Item -->
                <div class="col-md-2 col-lg-2 col-xl-2 d-flex mt-3">
                  <form action="http://localhost/partials/cart.php" method="post">
                    <input type="submit" name="remove" value="remove" class="btn btn-danger" >
                    <input type="hidden" name="code" value="<?= $cart['code'] ?>">
                  </form> 
                </div>
                <!-- Single Cart Details End -->

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



<script type="text/javascript">

$(function(){
  //Add to cart added Message
  $('#rmess').fadeOut(2000);

  //Update price when update quantity 
  $('.qt').each(function(i){     

      $('.qty').eq(i).on('change', function(){
          let total = parseInt($('.qty').eq(i).val()) * parseFloat($('.price').eq(i).val())
          $('.total').eq(i).text(total)        
      });
       
  });

});
</script>

