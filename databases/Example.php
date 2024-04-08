<?php 
    $db = new SQLServerDriver($host,$db,$uid,$password); 
    $db->db_connect();
    $db->add($data);
?>