<?php 
include "C:\wamp64\www\Melodyo\Core\livrC.php";
  $livr1C=new livrC();

	$livr1C->supprimerLivr($_GET["id_livr"]);
  header("location: afficherLivr.php");
?>
