<?php 
    include 'MySQLDriver.php';

    $host="localhost";
    $db="practice";
    $uid="root";
    $password="";

    $db = new MySQLDriver($host,$db,$uid,$password); 
    $pdo = $db->db_connect();
    //$db->add($data);
   

?>