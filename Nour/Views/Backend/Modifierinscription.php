<?php 
include 'C:\wamp64\www\melodyo\Core\config.php';
include 'C:\wamp64\www\melodyo\Core\inscriptionOps.php';

if (isset($_POST['idc']) and isset($_POST['Nom']) and isset($_POST['Prenom']) and isset($_POST['Email']) and isset($_POST['ide'])){
    $inscription = new inscription($_POST['idc'],$_POST['Nom'],$_POST['Prenom'],$_POST['Email'],$_POST['ide']);
    $inscriptionOps = new inscriptionOps();
    $inscriptionOps->modifierinscription($inscription);
    }else{
        echo "vérifier les champs";
    }
        header("location: Listeinscription.php");

    ?>
