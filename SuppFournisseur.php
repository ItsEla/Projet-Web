<?php 
include "C:\wamp64\www\Melodyo\Core\config.php";
include "C:\wamp64\www\Melodyo\Core\FournisseurOps.php";
  $FourisseurOps=new FourisseurOps();

	$FourisseurOps->supprimerfourisseur($_GET["CIN"]);
  header("location: AfficherFournisseur.php");
?>
