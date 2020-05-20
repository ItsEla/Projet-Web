<?php 
include 'C:\wamp64\www\melodyo\Core\config.php';
include 'C:\wamp64\www\melodyo\Core\evenementOps.php';

if (isset($_POST['ide']) and isset($_POST['datee'])  and isset($_POST['name'])   and isset($_POST['id'])  and isset($_POST['descr'])  and isset($_POST['image']))
{
    $evenement = new evenement($_POST['ide'],$_POST['datee'],$_POST['name'],$_POST['id'],$_POST['descr'],$_POST['image']);
    $evenementOps = new evenementOps();
    $evenementOps->ajouterevenement($evenement);
    }else{
        echo "vérifier les champs";
    }
    header("location: Listeevenement.php");
    ?>
