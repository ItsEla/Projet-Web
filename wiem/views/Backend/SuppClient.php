<?php 
include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\config.php';
include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\ClientOps.php';
  $ClientOps=new ClientOps();

	$ClientOps->supprimerClient($_GET["ID"]);
  header("location: AfficherClient.php");
?>
