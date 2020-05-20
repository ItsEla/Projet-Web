<?php
include 
'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Entities\Client.php';  
    class ClientOps{
        function ajouterClient($Client){
            $sql = "INSERT INTO client (`ID`, `Nom`, `Prenom`, `Telephone`, `Mdp`, `Email`) VALUES (:ID, :Nom, :Prenom, :Telephone, :Mdp, :Email)";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':ID',$Client->getidClient());
                $req->bindValue(':Nom',$Client->getnomClient());
                $req->bindValue(':Prenom',$Client->getprenomClient());
                $req->bindValue(':Telephone',$Client->gettelephoneClient());
                $req->bindValue(':Mdp',$Client->getMdpClient());
                $req->bindValue(':Email',$Client->getEmailClient());
                $req->execute();   
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
                if(strpos($e->getMessage(), 'SQLSTATE[23000]') != false)
                    echo '<script>alert("Echec, ce criminel existe déjà.");</script>';
            }    
        }

        function getClient(){
            $sql="SELECT * FROM `client`";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
        public static function nombreClient(){
            $sql="SELECT count(*) FROM `client`";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
        public static function getClients($ID){
            $sql="SELECT * FROM `client` WHERE ID = ".$ID;
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }

        function modifierClient($Client,$ID){
            $sql = "UPDATE `client` SET `Nom` = :Nom, `Prenom` = :Prenom, `Telephone` = :Telephone, `Mdp` = :Mdp, `Email` = :Email WHERE `client`.`ID` = :ID";
            $db = config::getConnexion();
            
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':ID',$Client->getidClient());
                $req->bindValue(':Nom',$Client->getnomClient());
                $req->bindValue(':Prenom',$Client->getprenomClient());
                $req->bindValue(':Telephone',$Client->gettelephoneClient());
                $req->bindValue(':Mdp',$Client->getMdpClient());
                $req->bindValue(':Email',$Client->getEmailClient());
                $req->execute();
                $datas = array(':IDD'=>$IDD, ':ID'=>$ID, ':Nom'=>$Nom,':Prenom'=>$Prenom,':Email'=>$Email,':Telephone'=>$Telephone,':Mdp'=>$Mdp);
        $req->bindValue(':IDD',$IDD);
        $req->bindValue(':ID',$ID);
        $req->bindValue(':Nom',$Nom);
        $req->bindValue(':Prenom',$Prenom);
        $req->bindValue(':Email',$Email);
        $req->bindValue(':Telephone',$Telephone);
        $req->bindValue(':Mdp',$Mdp);
        
        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        } 
            }
           
        function supprimerClient($ID){
            $sql = "DELETE FROM `client` WHERE `client`.`ID` = :ID";
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
function recupererclient($ID){
        $sql="SELECT * from client where ID=$ID";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

         function trierClient(){
            $sql = "SELECT * FROM `client` ORDER BY `ID` DESC";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
            
                $req->execute();
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
    }}

?>