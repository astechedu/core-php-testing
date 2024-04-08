<?php
session_start();

if($_SESSION['logged_in'] == true){
	$_SESSION['logged_in']="";
	session_destroy();
	return header("Location: index.php");

 // require_once __DIR__ . '/view/dashboard.php';
}


?>