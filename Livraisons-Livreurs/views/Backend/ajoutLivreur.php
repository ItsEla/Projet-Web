 <?PHP
        include "C:\wamp64\www\Melodyo\Entities\livreur.php";
        include "C:\wamp64\www\Melodyo\Core\livreurC.php";

if (isset($_POST['id_livreur']) and isset($_POST['nom']) and isset($_POST['prenom'])
and isset($_POST['salaire']) and isset($_POST['email']) and isset($_POST['mdp']))
{
$id_livreur=$_POST['id_livreur'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$salaire=$_POST['salaire'];
$email=$_POST['email'];
$mdp=$_POST['mdp'];


$livreur1=new livreur($id_livreur,$nom,$prenom,$salaire,$email,$mdp);
$livreur1C=new livreurC($livreur1);
$livreur1C->ajouterLivreur($livreur1);
header('Location: afficherLivreur.php');

}
?>