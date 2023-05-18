<?php



/*
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/auth/login.php';
        break;
    case '' :
        require __DIR__ . '/auth/login.php';
        break;
    case '/register' :
        require __DIR__ . '/auth/register.php';
        break;
    case '/about' :
        require __DIR__ . '/pages/about.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
*/
?>


<!-- Header -->
<header id="header">
<?php include 'partials/header.php'; ?>
</header>

<!-- Header -->
<navbar id="navbar">
<div class="container">
<?php include 'partials/navbar.php'; ?>
</div>
</navbar>




<?php 
/*
echo  $_SERVER['HTTP'];
$dir = pathinfo($_SERVER['PHP_SELF']);
 echo $filename=$dir['filename'].'.'.$dir['extension'];
//echo $dir['filename'].'.'.$dir['extension'];
//echo $dir['basename'];

//echo "<pre>";print_r(pathinfo($_SERVER['PHP_SELF']));

//echo $_SERVER['REQUEST_URI']; 
 //echo "<pre>";print_r($_SERVER);
*/
?>


<!-- Changable -->
<!--
<section>
<div class="container">
<?php //include 'auth/'.$filename; ?>
</div>
</section>
-->




<!-- Content -->
<section>
<div class="container">
<?php include 'auth/login.php'; ?>
</div>
</section>



<!-- Footer -->
<footer id="footer">
<?php include 'partials/footer.php'; ?>
</footer>




