<?php
// Add to cart logics


Key: cart logic 1, cart logic 2, tables, 
//---------------------------------------------------------


1. Cart Logic 1:

if(isset($_POST["add_to_cart"])){

	if($_SESSION["shopping_cart"]) {

		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id)){

 			$count = count($_SESSION["shopping_cart"]);
 			$item_array = array(
	 			'item_id' => $_GET['id'],
	 			'item_name' => $_POST['hiden_name'],
	 			'item_price' => $_POST['hidden_price'],
	 			'item_quantity' => $_POST['quantity']
 			);
 			$_SESSION["shopping_cart"][$count] = $item_array;
		}else{
			echo '<script>alert("Item Already Added")</script>';
		    echo '<script>windows.location="index.php"</script>';
		
		}

	}else{

 		$item_array = array(
 			'item_id' => $_GET['id'],
 			'item_name' => $_POST['name'],
 			'item_price' => $_POST['price'],
 			'item_quantity' => $_POST['quantity']
 		);
 		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

//Display On Cart:
if(!empty($_SESSION['shopping_cart'])){

	$total = 0;
	foreach($_SESSION["shopping_cart"] as $keys => $values) {

	}	

}
//---------------------------------------------------------------------



2. Cart Logic 2. 

session_start();

$pid = $_GET['pid'];
$qty = $_GET['qty'];

if(isset($_SESSION['productcart'])) {
//N times user visite
	$currentNo = $_SESSION['counter']+1;
	$_SESSION['productcart'][$currentNo] = $pid;
	$_SESSION['qtycart'][$currentNo] = $qty;
	$_SESSION['counter'] = $currentNo;

} else {

    //First time user visit
	$productcart = array();
	$qtycart = array();

	$_SESSION['productcart'][0] = $pid;
	$_SESSION['qtycart'][0] = $qty;
	$_SESSION['counter'] = 0;
}

header('localhot: viewcart.php');


//Cart Showing

session_start();

if(isset($_SESSION['productcart']) && !empty($_SESSION['productcart'])) {
      echo "<table>";
	foreach($_SESSION['productcart'] as $key => $value) {

       $productq = mysqli_query("select * from tbl_productmaster where product_id='{$value}'") or die(mysqli_error($conn));
       $productdetails = mysqli_fetch_array($productq);

       echo "<tr>";
       echo "<td>$key</td>";
       echo "<td>{$productdetails['pro_title']}</td>";
       echo "<td></td>";
       echo "</tr>";
    }

      echo "</table>";	

}else{
	echo "Cart is empty";
	echo "< href='product-listing.php'>By Products</a>";
}





//--------------------------------------------------------------------

//Prepate tables:

https://www.codexworld.com/simple-php-shopping-cart-using-sessions/

php_shopping_cart/
├── index.php
├── viewCart.php
├── checkout.php
├── orderSuccess.php
├── config.php
├── dbConnect.php
├── cartAction.php
├── Cart.class.php
├── js/
|   └── jquery.min.js
├── css/
|   ├── bootstrap.min.css
|   └── style.css
└── images/



CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `grand_total` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `status` enum('Pending','Completed','Cancelled') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



CREATE TABLE `order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


//Cart Library (Cart.class.php)

contents(),	get_item(), total_items(), total(), insert(), update(), remove(), destroy() 



//------------------------------------------------------------------------------------------------


//Next or other website notes: Core PHP:
//Important script on index.php page
//https://code.tutsplus.com/tutorials/build-a-shopping-cart-with-php-and-mysql--net-5144

//Core PHP AddToCart Code:

if(isset($_GET['action']) && $_GET['action']=="add"){
    $id=intval($_GET['id']);
    if(isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity']++;
    } else {
        $stmt = $mysqli->prepare("SELECT * FROM products WHERE id_product = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();

        if(isset($result['id_product']) && $result['id_product']) {
            $_SESSION['cart'][$result['id_product']] = array(
                "quantity" => 1,
                "price" => $result['price']
            );

        } else {
            $message="This product id is invalid!";
        }            
    }
} 


//Cart.php code:

if(isset($_POST['submit'])){       

    foreach($_POST['quantity'] as $key => $val) { 

        if($val==0) { 

            unset($_SESSION['cart'][$key]); 

        }else{ 

            $_SESSION['cart'][$key]['quantity']=$val; 

        } 
    }  
}


//-----------------------------------------------------------

//Removing the products from cart
// code for removing product from cart
case "remove":
if(!empty($_SESSION["cart_item"])) {
foreach($_SESSION["cart_item"] as $k => $v) {
if($_GET["code"] == $k)
unset($_SESSION["cart_item"][$k]);
if(empty($_SESSION["cart_item"]))
unset($_SESSION["cart_item"]);
}
}
break;














?>