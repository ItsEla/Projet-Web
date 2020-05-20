<?php 
include 
'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\config.php';
include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\ClientOps.php';

if ( isset($_POST['Nom']) and isset($_POST['Prenom']) and isset($_POST['Telephone']) and isset($_POST['Mdp'])and isset($_POST['Email'])){
    
    
    $Client=new Client($_POST['ID'],$_POST['Nom'],$_POST['Prenom'],$_POST['Telephone'],$_POST['Mdp'],$_POST['Email']);
    //var_dump($Client)
    $ClientOps=new ClientOps;
    $ClientOps->ajouterClient($Client);
    
     

    }else{
        echo "vérifier les champs";
    }
     header("location: AfficherClient.php");

    ?>
