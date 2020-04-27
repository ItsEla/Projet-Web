<?php 
include "C:\wamp64\www\Melodyo\Core\config.php";
include "C:\wamp64\www\Melodyo\Core\FournisseurOps.php";

if (isset($_POST['CIN']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['telephone']) and isset($_POST['Mdp'])and isset($_POST['Email'])){
    if(filter_var($_POST['Email'],FILTER_VALIDATE_EMAIL)&&(preg_match('#^[0-9]{8}$#',$_POST['telephone']))&&(preg_match('#^[0-9]{8}$#',$_POST['CIN']))) {
    
    $fournisseur=new fournisseur($_POST['CIN'],$_POST['nom'],$_POST['prenom'],$_POST['telephone'],$_POST['Mdp'],$_POST['Email']);
    //var_dump($fournisseur)
    $FourisseurOps=new FourisseurOps;
    $FourisseurOps->ajouterfourisseur($fournisseur);
    }
    else { echo "Ce n'est Pas La Bonne Forme De Mail Ou de telephone ou De CIN Veillez Verfier les Champs"; }  

    }else{
        echo "vérifier les champs";
    }
    ?>
