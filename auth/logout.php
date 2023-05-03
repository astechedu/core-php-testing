<?php
declare(strict_types=1);

session_start();

if($_SESSION['logged_in'] == true){
	unset($_SESSION['username']);
	unset($_SESSION['city']);
	session_destroy();

	header('location: /auth/login.php');
}

    header('location: /pages/home.php');



?>