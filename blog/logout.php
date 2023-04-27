<?php
declare(strict_types=1);
sesetion_start();


if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['loggedin']);
    unset($_SESSION['author']);
    header('location:blog.php');
}

?>