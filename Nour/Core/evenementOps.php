<?php
include 'C:\wamp64\www\melodyo\Entities\evenement.php';
    class evenementOps{

        function ajouterevenement($evenement){
                        $sql = "INSERT INTO evenement (`ide`,`datee`,`name`,`id`,`descr`,`image`) VALUES (:ide ,:datee ,:name ,:id ,:descr ,:image)";
                          $db = config::getConnexion();
                        try{
                            $req=$db->prepare($sql);
                            $req->bindValue(':ide',$evenement->getide());
                            $req->bindValue(':datee',$evenement->getdatee());
                            $req->bindValue(':name',$evenement->getname());
                            $req->bindValue(':id',$evenement->getid());

                            $req->bindValue(':descr',$evenement->getdescr());
                            $req->bindValue(':image',$evenement->getimage());

                            $req->execute();   
                        }
                        catch (Exception $e){
                            echo 'Erreur: '.$e->getMessage();
                            if(strpos($e->getMessage(), 'SQLSTATE[23000]') != false)
                                echo '<script>alert("Echec, ce criminel existe déjà.");</script>';
                        }   
            
                 }
        

        function getevenement(){
            $sql="SELECT * FROM `evenement`";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
        public static function nombreevenement(){
            $sql="SELECT count(*) FROM `evenement`";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }

        public static function getevenements($ide){
            $sql="SELECT * FROM `evenement` WHERE ide = ".$ide;
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
        function modifierevenement($evenement){
            $sql = "UPDATE `evenement` SET `datee` = :datee ,`name` = :name  ,`id` = :id,`descr` = :descr, `image` = :image  WHERE `evenement`.`ide` = :ide";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':ide',$evenement->getide());
                $req->bindValue(':datee',$evenement->getdatee());
                $req->bindValue(':name',$evenement->getname());
                 $req->bindValue(':id',$evenement->getid());

                $req->bindValue(':descr',$evenement->getdescr());
                $req->bindValue(':image',$evenement->getimage());


                $req->execute();   
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
                if(strpos($e->getMessage(), 'SQLSTATE[23000]') != false)
                    echo '<script>alert("Echec, ce criminel existe déjà.");</script>';
            }    
        }

        function supprimerevenement($ide){
            $sql = "DELETE FROM `evenement` WHERE `evenement`.`ide` = :ide";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':ide',$ide);
                $req->execute();
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }


function triercategorie(){
        $sql = "SELECT * FROM `evenement` ORDER BY `ide` DESC";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
        
            $req->execute();
        }
        catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
        }    
    }

    }



?>