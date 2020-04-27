<?php 
include "C:\wamp64\www\Melodyo\Core\config.php";
include "C:\wamp64\www\Melodyo\Core\FactureOps.php";


$facture = new facture($_POST['ID'], $_POST['Montant']);

    $FactureOps = new FactureOps();

    $FactureOps->modifierfacture($facture);

?>