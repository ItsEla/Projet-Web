<?php
include 'C:\wamp64\www\melodyo\Core\config.php';
include 'C:\wamp64\www\melodyo\Core\evenementOps.php';


    $evenementOps = new evenementOps();
    $evenementOps->supprimerevenement($_GET['ide']);
    header("location: Listeevenement.php");
    
?>
