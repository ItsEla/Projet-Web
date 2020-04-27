<?php 
include "C:\wamp64\www\Melodyo\Core\config.php";
include "C:\wamp64\www\Melodyo\Core\FournisseurOps.php";

 $fournisseur = new fournisseur($_POST['CIN'],$_POST['nom'],$_POST['prenom'],$_POST['telephone'],$_POST['Mdp'],$_POST['Email']);

    $FourisseurOps = new FourisseurOps();

    $FourisseurOps->modifierfournisseur($fournisseur);


?>
