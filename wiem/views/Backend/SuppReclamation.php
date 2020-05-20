<?php 
include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\config.php';
include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\ReclamationOps.php';

  $reclamationOps=new reclamationOps();

  $reclamationOps->supprimerReclamation($_GET["ID"]);
  header("location: AfficherReclamation.php");



?>