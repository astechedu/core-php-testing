<?php
include 'bootstrap/config.php';

$db_conn = new dbcon();

$allCategories = array_column($db_conn->fetchAllCategories(), 'category_name','category_id');
//echo "<pre>";print_r($allCategories);
$fetchByCategoryFashion = $db_conn->fetchByCategoryName('fashion');

?>

<?php include 'partials/header.php'; ?>

<?php include 'partials/banner.php'; ?>

<?php include 'partials/fashion.php'; ?>

<?php include 'partials/footer.php'; ?>
