<?php
session_start();
 
echo "PostData<br>";
echo "<pre>"; print_r($_POST);

echo "Sess Data <br>";
 echo "<pre>"; print_r($_SESSION['shopping_cart']);

//echo "<pre>"; print_r(array_keys($_SESSION['shopping_cart']));
// exit;
//session_destroy($_SESSION['shopping_cart'][counter]);
//session_destroy($_SESSION['shopping_cart'][0]);

//session_destroy($_SESSION['shopping_cart']);

//include 'dbcon.php';

//Object create_function(args, code)
    include '../bootstrap/dbcon.php';

    $db_conn = new dbcon();   
    $status="";
    //User Registration   
    //$id = $_POST['id'] ?? '';
    //$name = $_POST['name'] ?? '';
    //$price = $_POST['price'] ?? '';
    //$qty = $_POST['quantity'] ?? '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){      
   
  if(isset($_POST['submit'])){

     $id = $_POST['id'];
     $name = $_POST['name'];
     $price = $_POST['price'];
     $qty = $_POST['quantity'];
     $code = $_POST['code'];
     //$items = $db_conn->fetchById($id);

     //echo "<pre>"; print_r($items);

     //echo "<pre>"; print_r($cartArray);

    //$id = $_POST['id'] ?? '';
    //$name = $_POST['name'] ?? '';
    //$price = $_POST['price'] ?? '';
    //$qty = $_POST['quantity'] ?? '';
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

                      echo "Found";
                     //echo "<pre>";print_r(array_keys($_SESSION['shopping_cart']));
                    
                     //echo $_SESSION['shopping_cart'][$code]['quantity'] += $cartArray[$code]['quantity'];
                      //header('location: /');

	                 $_SESSION['shopping_cart'] = array_merge($_SESSION['shopping_cart'],$cartArray);
	                  header('location: /');

                  }else{      

                  	  echo 'Not Found';}
	                  echo $_SESSION['shopping_cart'][$code]['quantity'] += $cartArray[$code]['quantity'];
                      header('location: /');

	                 //$_SESSION['shopping_cart'] = array_merge($_SESSION['shopping_cart'],$cartArray);
	                  //header('location: /');

		        //echo "<pre>"; print_r($_SESSION['shopping_cart'])		        

	    }else{

		        //If product hit first time by user
		        $_SESSION['shopping_cart'] = $cartArray;
		         header('location: /');
		        //$status = "<div class='box'>Product is added to your cart!</div>";
		        //$_SESSION['couter'] = 0;

	         //$counter = $_SESSION['couter'] ++;     
	         //$_SESSION['shopping_cart'][$counter] = $cartArray;
	         //$_SESSION['couter'] = 0;

        }           
    }
}

?>
