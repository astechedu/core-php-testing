<?php
include 'bootstrap/config.php';

$db_conn = new dbcon();

$allCategories = array_column($db_conn->fetchAllCategories(), 'category_name','category_id');
//echo "<pre>";print_r($allCategories);

$fetchByCategoryElectronics = $db_conn->fetchByCategoryName('electronics');

//print_r($fetchByCategoryName);
?>

<?php include 'partials/header.php'; ?>

<?php include 'partials/banner.php'; ?>

<?php include 'partials/electronic.php'; ?>

<?php include 'partials/footer.php'; ?>
