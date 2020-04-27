<?php
include "C:\wamp64\www\Melodyo\Entities\Fournisseur.php";  
    class FourisseurOps{
        function ajouterfourisseur($fourisseur){
            $sql = "INSERT INTO fournisseur (`CIN`, `Nom`, `Prenom`, `Telephone`, `Mdp`, `Email`) VALUES (:CIN, :Nom, :Prenom, :Telephone, :Mdp, :Email)";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':CIN',$fourisseur->getcinfournisseur());
                $req->bindValue(':Nom',$fourisseur->getnomfournisseur());
                $req->bindValue(':Prenom',$fourisseur->getprenomfournisseur());
                $req->bindValue(':Telephone',$fourisseur->gettelephonefournisseur());
                $req->bindValue(':Mdp',$fourisseur->getMdpfournisseur());
                $req->bindValue(':Email',$fourisseur->getEmailfournisseur());
                $req->execute();   
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
                if(strpos($e->getMessage(), 'SQLSTATE[23000]') != false)
                    echo '<script>alert("Echec, ce criminel existe déjà.");</script>';
            }    
        }

        function getfournisseur(){
            $sql="SELECT * FROM `fournisseur`";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
        public static function nombreFournisseur(){
            $sql="SELECT count(*) FROM `fournisseur`";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
        public static function getfourisseurs($CIN){
            $sql="SELECT * FROM `fournisseur` WHERE CIN = ".$CIN;
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }

        function modifierfournisseur($fournisseur){
            $sql = "UPDATE `fournisseur` SET `Nom` = :Nom, `Prenom` = :Prenom, `Telephone` = :Telephone, `Mdp` = :Mdp, `Email` = :Email WHERE `fournisseur`.`CIN` = :CIN";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':CIN',$fournisseur->getcinfournisseur());
                $req->bindValue(':Nom',$fournisseur->getnomfournisseur());
                $req->bindValue(':Prenom',$fournisseur->getprenomfournisseur());
                $req->bindValue(':Telephone',$fournisseur->gettelephonefournisseur());
                $req->bindValue(':Mdp',$fournisseur->getMdpfournisseur());
                $req->bindValue(':Email',$fournisseur->getEmailfournisseur());
                $req->execute(); 
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
              }    
           } 

        function supprimerfourisseur($CIN){
            $sql = "DELETE FROM `fournisseur` WHERE `fournisseur`.`CIN` = :CIN";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':CIN',$CIN);
                $req->execute();
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }

    }

?>