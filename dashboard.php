<?php
  declare(strict_types = 1);
session_start();


if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){

    echo "<h1>Welcome to Dashboard, ".$_SESSION['emp_name']."</h1>";

}else{

	 return header('location: index.php');
}

?>


<a href="index.php">Home</a>
<a href="logout.php">Logout</a>