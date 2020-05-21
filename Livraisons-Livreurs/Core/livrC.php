<?PHP
include "C:\wamp64\www\Melodyo\Core\config.php";
//include "../entities/livr.php";


class livrC {
    function afficherLivr ($livr){
		echo "id_livr: ".$livr->getId()."<br>";
		echo "prix: ".$livr->getPrix()."<br>";
		echo "id_livreur: ".$livr->getId_livreur()."<br>";
		echo "id_res: ".$livr->getId_res()."<br>";
	}


	function ajouterLivr($livr){
		$sql="insert into livr
		(id_livr,prix,id_livreur,id_res) 
		values (:id_livr,:prix,:id_livreur,:id_res)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_livr=$livr->getId();
        $prix=$livr->getPrix();
        $id_livreur=$livr->getId_livreur();
        $id_res=$livr->getId_res();
		

		$req->bindValue(':id_livr',$id_livr);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':id_livreur',$id_livreur);
		$req->bindValue(':id_res',$id_res);
        
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherLivrs(){
		$sql="SELECT * From livr";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    
	function supprimerLivr($id_livr){
		$sql="DELETE FROM livr where id_livr= :id_livr";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_livr',$id_livr);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
	function modifierLivr($livr,$id_livr){
		$sql="UPDATE livr SET id_livr=:id_livrr, prix=:prix, id_livreur=:id_livreur, id_res=:id_res WHERE id_livr=:id_livr";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
      try{		
        $req=$db->prepare($sql);
		$id_livrr=$livr->getId();
        $prix=$livr->getPrix();
        $id_livreur=$livr->getId_livreur();
        $id_res=$livr->getId_res();
       
		$datas = array(':id_livrr'=>$id_livrr, ':id_livr'=>$id_livr, ':prix'=>$prix,':id_livreur'=>$id_livreur,':id_res'=>$id_res);
		$req->bindValue(':id_livrr',$id_livrr);
		$req->bindValue(':id_livr',$id_livr);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':id_livreur',$id_livreur);
		$req->bindValue(':id_res',$id_res);
      
            $s=$req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererLivr($id_livr){
		$sql="SELECT * from livr where id_livr=$id_livr";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeLivr($prix){
		$sql="SELECT * from livr where prix=$prix";
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
		$sql="SELECT count(*) FROM livr";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
	function getlivrs(){
        $sql="SELECT * FROM livr";
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