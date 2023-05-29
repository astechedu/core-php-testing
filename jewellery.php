<?php
include 'bootstrap/config.php';

$db_conn = new dbcon();

$allCategories = array_column($db_conn->fetchAllCategories(), 'category_name','category_id');
//echo "<pre>";print_r($allCategories);

$fetchByCategoryName = $db_conn->fetchByCategoryName('jewellery');


?>

<?php include 'partials/header.php'; ?>

<?php include 'partials/banner.php'; ?>

<?php include 'partials/jewellery.php'; ?>

<?php include 'partials/footer.php'; ?>





