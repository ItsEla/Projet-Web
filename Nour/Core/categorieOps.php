<?php
include 'C:\wamp64\www\melodyo\Entities\categorieEven.php';  
class categorieOps{

    function ajoutercategorie($categorie){
                    $sql = "INSERT INTO categorie_evenement (`id`,`nom`) VALUES (:id,:nom)";
                      $db = config::getConnexion();
                    try{
                        $req=$db->prepare($sql);
                        $req->bindValue(':id',$categorie->getid());
                        $req->bindValue(':nom',$categorie->getnom());
                        $req->execute();   
                    }
                    catch (Exception $e){
                        echo 'Erreur: '.$e->getMessage();
                        if(strpos($e->getMessage(), 'SQLSTATE[23000]') != false)
                            echo '<script>alert("Echec, ce criminel existe déjà.");</script>';
                    }   
        
             }
    

    function getcategorie(){
        $sql="SELECT * FROM `categorie_evenement`";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    public static function getcategories($id){
        $sql="SELECT * FROM `categorie_evenement` WHERE id = ".$id;
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    function modifiercategorie($categorie){
        $sql = "UPDATE `categorie_evenement` SET `nom` = :nom   WHERE `categorie_evenement`.`id` = :id";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':id',$categorie->getid());
            $req->bindValue(':nom',$categorie->getnom());
            $req->execute();   
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
            if(strpos($e->getMessage(), 'SQLSTATE[23000]') != false)
                echo '<script>alert("Echec, ce criminel existe déjà.");</script>';
        }    
    }

    function supprimercategorie($id){
        $sql = "DELETE FROM `categorie_evenement` WHERE `categorie_evenement`.`id` = :id";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':id',$id);
            $req->execute();
        }
        catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
        }    
    }
    function triercategorie(){
        $sql = "SELECT * FROM `categorie_evenement` ORDER BY `id` DESC";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
        
            $req->execute();
        }
        catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
        }    
    }

    
    function getNoP($id){
        $sql="SELECT count(*) FROM `evenement` WHERE `evenement`.`ide` = ".$id;
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    public static function getTopcategorie(){
        $sql="SELECT categorie_evenement.id, count(categorie_evenement.id) FROM categorie_evenement JOIN evenement ON categorie_evenement.id = evenement.id GROUP by categorie_evenement.id ORDER by count(categorie_evenement.id) desc";
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
        $sql="SELECT count(*) FROM `categorie_evenement`";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

function recherchercategorie($id){
        $sql="SELECT * from categorie_evenement where id=$id";
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