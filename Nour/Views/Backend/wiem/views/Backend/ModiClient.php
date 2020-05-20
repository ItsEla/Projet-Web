<?php 
include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\config.php';
include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\ClientOps.php';

if (isset($_GET['ID'])and isset($_POST['Nom']) and isset($_POST['Prenom']) and isset($_POST['Telephone'])and isset($_POST['Mdp'])and isset($_POST['Email'])){


    $ClientOps = new ClientOps();
 $ClientOps->recupererclient($_GET['ID']);
	foreach($list as $row){
		$ID=$row['ID'];
		$Nom=$row['Nom'];
		$Prenom=$row['Prenom'];
		$Telephone=$row['Telephone'];
    $Mdp=$row['Mdp'];}
 else if (isset($_POST['modifier'])){
	
    $Client = new Client($_POST['ID'],$_POST['Nom'],$_POST['Prenom'],$_POST['Telephone'],$_POST['Mdp'],$_POST['Email']);

    $ClientOps = new ClientOps();
    $ClientOps->modifierClient($Client,$ID);
}
header("location: AfficherClient.php");
}
?>
