<?php 
include 'C:\wamp64\www\melodyo\Core\config.php';
include 'C:\wamp64\www\melodyo\Core\inscriptionOps.php';


    $inscriptionOps = new inscriptionOps();
    $inscriptionOps->supprimerinscription($_GET['idc']);
    header("location: Listeinscription.php");
    ?>
