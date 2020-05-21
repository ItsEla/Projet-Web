<?php
//include "C:\wamp64\www\Melodyo\Entities\livreur.php";  
include "C:\wamp64\www\Melodyo\Core\config.php";
   
class livreurC {
    function afficherLivreur ($livreur){
            echo "id_livreur: ".$livreur->getId()."<br>";
            echo "Nom: ".$livreur->getNom()."<br>";
            echo "Prénom: ".$livreur->getPrenom()."<br>";
            echo "Salaire: ".$livreur->getSalaire()."<br>";
            echo "Email: ".$livreur->getEmail()."<br>";
            echo "Mdp: ".$livreur->getMdp()."<br>";
        }
    
        public static function nombreLivreurs(){
            $sql="SELECT count(*) FROM livreur";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }

        function ajouterLivreur($livreur){
            $sql="insert into livreur
            (id_livreur,nom,prenom,salaire,email,mdp) 
            values (:id_livreur,:nom,:prenom,:salaire,:email,:mdp)";
            $db = config::getConnexion();
            try{
            $req=$db->prepare($sql);
            
            $id_livreur=$livreur->getId();
            $nom=$livreur->getNom();
            $prenom=$livreur->getPrenom();
            $salaire=$livreur->getSalaire();
            $email=$livreur->getEmail();
            $mdp=$livreur->getMdp();
    
            $req->bindValue(':id_livreur',$id_livreur);
            $req->bindValue(':nom',$nom);
            $req->bindValue(':prenom',$prenom);
            $req->bindValue(':salaire',$salaire);
            $req->bindValue(':email',$email);
            $req->bindValue(':mdp',$mdp);
            
                $req->execute();
               
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
            
        }
        
        function afficherLivreurs(){
            $sql="SELECT * From livreur";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
        
        function supprimerLivreur($id_livreur){
            $sql="DELETE FROM livreur where id_livreur= :id_livreur";
            $db = config::getConnexion();
            $req=$db->prepare($sql);
            $req->bindValue(':id_livreur',$id_livreur);
            try{
                $req->execute();
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        
        function modifierLivreur($livreur,$id_livreur){
            $sql="UPDATE livreur SET id_livreur=:id_livreurr, nom=:nom, prenom=:prenom, salaire=:salaire, email=:email, mdp=:mdp WHERE id_livreur=:id_livreur";
            
            $db = config::getConnexion();
            //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    try{		
            $req=$db->prepare($sql);
            $id_livreurr=$livreur->getId();
            $nom=$livreur->getNom();
            $prenom=$livreur->getPrenom();
            $salaire=$livreur->getSalaire();
            $email=$livreur->getEmail();
            $mdp=$livreur->getMdp();
            $datas = array(':id_livreurr'=>$id_livreurr, ':id_livreur'=>$id_livreur, ':nom'=>$nom,':prenom'=>$prenom,':salaire'=>$salaire,':email'=>$email,':mdp'=>$mdp);
            $req->bindValue(':id_livreurr',$id_livreurr);
            $req->bindValue(':id_livreur',$id_livreur);
            $req->bindValue(':nom',$nom);
            $req->bindValue(':prenom',$prenom);
            $req->bindValue(':salaire',$salaire);
            $req->bindValue(':email',$email);
            $req->bindValue(':mdp',$mdp);
    
            
            
                $s=$req->execute();
            }
            catch (Exception $e){
                echo " Erreur ! ".$e->getMessage();
       echo " Les datas : " ;
      print_r($datas);
            }
            
        }
        function recupererLivreur($id_livreur){
            $sql="SELECT * from livreur where id_livreur=$id_livreur";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        
        function rechercherListeLivreur($salaire){
            $sql="SELECT * from livreur where salaire=$salaire";
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