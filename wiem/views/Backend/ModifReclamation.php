<?php 
include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\config.php';
include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\ReclamationOps.php';

if (isset($_POST['ID']) and isset($_POST['Email']) and isset($_POST['Probleme']) and isset($_POST['Cause']))

	{
		$reclamation = new reclamation($_POST['ID'], $_POST['Email'],$_POST['Probleme'],$_POST['Cause']);

    $reclamationOps = new reclamationOps();

    $reclamationOps->modifierReclamation($reclamation);
}
 header("location: AfficherReclamation.php");

?>