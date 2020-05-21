<?php 
include "C:\wamp64\www\Melodyo\Core\livreurC.php";
  $livreur1C=new livreurC();

	$livreur1C->supprimerLivreur($_GET["id_livreur"]);
  header("location: afficherLivreur.php");
?>
