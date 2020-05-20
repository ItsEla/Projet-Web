<?php
include 'C:\wamp64\www\melodyo\Entities\inscription.php';
    class inscriptionOps{

        function ajouterinscription($inscription){
                        $sql = "INSERT INTO inscription (`idc`,`Nom`,`Prenom`,`Email`,`ide`) VALUES (:idc ,:Nom ,:Prenom ,:Email,:ide )";
                          $db = config::getConnexion();
                        try{
                            $req=$db->prepare($sql);
                            $req->bindValue(':idc',$inscription->getidc());
                            $req->bindValue(':Nom',$inscription->getNom());
                            $req->bindValue(':Prenom',$inscription->getPrenom());
                            $req->bindValue(':Email',$inscription->getEmail());
                            $req->bindValue(':ide',$inscription->getide());


                            $req->execute();   
                        }
                        catch (Exception $e){
                            echo 'Erreur: '.$e->getMessage();
                            if(strpos($e->getMessage(), 'SQLSTATE[23000]') != false)
                                echo '<script>alert("Echec, ce criminel existe déjà.");</script>';
                        }   
            
                 }
        

        function getinscription(){
            $sql="SELECT * FROM `inscription`";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
        
        

        public static function getinscriptions($idc){
            $sql="SELECT * FROM `inscription` WHERE idc = ".$idc;
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
        function modifierinscription($inscription){
            $sql = "UPDATE `inscription` SET `Nom` = :Nom ,`Prenom` = :Prenom  ,`Email` = :Email,`ide` = :ide  WHERE `inscription`.`idc` = :idc";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                                $req->bindValue(':idc',$inscription->getidc());

                $req->bindValue(':Nom',$inscription->getNom());
                $req->bindValue(':Prenom',$inscription->getPrenom());
                 $req->bindValue(':Email',$inscription->getEmail());

                $req->bindValue(':ide',$inscription->getide());

                $req->execute();   
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
                if(strpos($e->getMessage(), 'SQLSTATE[23000]') != false)
                    echo '<script>alert("Echec, ce criminel existe déjà.");</script>';
            }    
        }
         function supprimerinscription($idc){
            $sql = "DELETE FROM `inscription` WHERE `inscription`.`idc` = :idc";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':idc',$idc);
                $req->execute();
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
       
    }



?>