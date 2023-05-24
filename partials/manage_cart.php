<?php
session_start();
 
include '../bootstrap/dbcon.php';

$db_conn = new dbcon();   
$status="";


if($_SERVER['REQUEST_METHOD'] == 'POST'){      
   
  if(isset($_POST['submit'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $qty = $_POST['quantity'];
    $code = $_POST['code'];

	$cartArray = array(   
		$code=>array(       
		'id' => $id,
		'name' => $name,
		'price' => $price,
		'quantity' => (int)$qty,
		'code' => $code      
		)   
	);

	if($_SESSION['shopping_cart']) {	  	        
	        //If again same product hit with same id, qty++
	        //echo "<pre>"; print_r($_SESSION['shopping_cart'][$id]);
         if(!in_array($cartArray[$code]['code'], array_keys($_SESSION['shopping_cart']))){     
            //echo "Found";
	       $_SESSION['shopping_cart'] = array_merge($_SESSION['shopping_cart'],$cartArray);
	       header('location: /');

        }else{    
            //echo 'Not Found';}
	        $_SESSION['shopping_cart'][$code]['quantity'] += $cartArray[$code]['quantity'];
            header('location: /');	
        }
	}else{
		    //If product hit first time by user
		    $_SESSION['shopping_cart'] = $cartArray;
		    header('location: /');
        }    

    }//Submit
}//POST


?>
