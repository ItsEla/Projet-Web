<?php 
include 'C:\wamp64\www\melodyo\Core\config.php';
include 'C:\wamp64\www\melodyo\Core\categorieOps.php';

if (isset($_POST['id']) and isset($_POST['nom'])){
    $categorie = new categorie($_POST['id'],$_POST['nom']);
    $categorieOps = new categorieOps();
    $categorieOps->modifiercategorie($categorie);
    }else{
        echo "vérifier les champs";
    }
        header("location: Listecategorie.php");

    ?>
