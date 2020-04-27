<?php
include "C:\wamp64\www\Melodyo\Entities\Facture.php";
    class FactureOps{

        function ajouterfacture($facture){
                        $sql = "INSERT INTO facture (`ID`,`Montant`) VALUES (:ID,:Montant)";
                          $db = config::getConnexion();
                        try{
                            $req=$db->prepare($sql);
                            $req->bindValue(':ID',$facture->getidfacture());
                            $req->bindValue(':Montant',$facture->getmontant());
                            $req->execute();   
                        }
                        catch (Exception $e){
                            echo 'Erreur: '.$e->getMessage();
                            if(strpos($e->getMessage(), 'SQLSTATE[23000]') != false)
                                echo '<script>alert("Echec, ce criminel existe déjà.");</script>';
                        }   
            
                 }
        

        function getfacture(){
            $sql="SELECT * FROM `facture`";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }

        public static function getfactures($ID){
            $sql="SELECT * FROM `facture` WHERE ID = ".$ID;
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
        function modifierfacture($facture){
            $sql = "UPDATE `facture` SET `Montant` = :Montant WHERE `facture`.`ID` = :ID";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':ID',$facture->getidfacture());
                $req->bindValue(':Montant',$facture->getmontant());
                $req->execute();   
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
                if(strpos($e->getMessage(), 'SQLSTATE[23000]') != false)
                    echo '<script>alert("Echec, ce criminel existe déjà.");</script>';
            }    
        }

        function supprimerfacture($ID){
            $sql = "DELETE FROM `facture` WHERE `facture`.`ID` = :ID";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':ID',$ID);
                $req->execute();
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
        function trierfacture(){
            $sql = "SELECT * FROM `facture` ORDER BY `Montant` DESC";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
            
                $req->execute();
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }

        
        function getNoP($ID){
            $sql="SELECT count(*) FROM `fournisseur` WHERE `fournisseur`.`CIN` = ".$ID;
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        public static function getTopfacture(){
            $sql="SELECT facture.ID, count(facture.ID) FROM facture JOIN fournisseur ON facture.ID = fournisseur.CIN GROUP by facture.ID ORDER by count(facture.ID) desc";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

        public static function getNoC(){
            $sql="SELECT count(*) FROM `Facture`";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

    
    }
?>