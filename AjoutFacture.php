<?php
include "C:\wamp64\www\Melodyo\Core\config.php";
include "C:\wamp64\www\Melodyo\Core\FactureOps.php";

if (isset($_POST['ID']) and isset($_POST['Montant'])){
    $facture = new facture($_POST['ID'],$_POST['Montant']);
    $factureOps = new factureOps();
    $factureOps->ajouterfacture($facture); 
    }else{
        echo "vérifier les champs";
    }
?>
