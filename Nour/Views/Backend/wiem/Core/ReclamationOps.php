<?php
include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Entities\Reclamation.php';
    class reclamationOps{

        function ajouterReclamation($reclamation){
                        $sql = "INSERT INTO reclamation (`ID`,`Email`,`Probleme`,`Cause`) VALUES (:ID,:Email,:Probleme,:Cause)";
                          $db = config::getConnexion();
                        try{
                            $req=$db->prepare($sql);
                            $req->bindValue(':ID',$reclamation->getidreclamation());
                            $req->bindValue(':Email',$reclamation->getemail());
                            $req->bindValue(':Probleme',$reclamation->getprobleme());
                            $req->bindValue(':Cause',$reclamation->getcause());
                            $req->execute();   
                        }
                        catch (Exception $e){
                            echo 'Erreur: '.$e->getMessage();
                            if(strpos($e->getMessage(), 'SQLSTATE[23000]') != false)
                                echo '<script>alert("Echec, ce criminel existe déjà.");</script>';
                        }   
            
                 }
        

        function getReclamation(){
            $sql="SELECT * FROM `reclamation`";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }

        public static function getReclamations($ID){
            $sql="SELECT * FROM `reclamation` WHERE ID = ".$ID;
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
        function modifierReclamation($reclamation){
            $sql = "UPDATE `reclamation` SET `Email` = :Email,`Probleme` = :Probleme,`Cause` = :Cause WHERE `reclamation`.`ID` = :ID";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':ID',$reclamation->getidreclamation());
                $req->bindValue(':Email',$reclamation->getemail());
                 $req->bindValue(':Probleme',$reclamation->getprobleme());
                $req->bindValue(':Cause',$reclamation->getcause());
                $req->execute();   
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
                if(strpos($e->getMessage(), 'SQLSTATE[23000]') != false)
                    echo '<script>alert("Echec, ce criminel existe déjà.");</script>';
            }    
        }

        function supprimerReclamation($ID){
            $sql = "DELETE FROM `reclamation` WHERE `reclamation`.`ID` = :ID";
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
        function trierReclamation(){
            $sql = "SELECT * FROM `reclamation` ORDER BY `ID` DESC";
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
            $sql="SELECT count(*) FROM `client` WHERE `client`.`ID` = ".$ID;
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        public static function getTopReclamation(){
            $sql="SELECT reclamation.ID, count(reclamation.ID) FROM reclamation JOIN client ON reclamation.ID = client.ID GROUP by reclamation.ID ORDER by count(reclamation.ID) desc";
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
            $sql="SELECT count(*) FROM `reclamation`";
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