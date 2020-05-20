<?php 
include 'C:\wamp64\www\melodyo\Core\config.php';
include 'C:\wamp64\www\melodyo\Core\categorieOps.php';


    $categorieOps = new categorieOps();
    $categorieOps->supprimercategorie($_GET['id']);
    header("location: Listecategorie.php");
    ?>
