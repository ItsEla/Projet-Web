 <?PHP
        include "C:\wamp64\www\Melodyo\Entities\livr.php";
        include "C:\wamp64\www\Melodyo\Core\livrC.php";

if (isset($_POST['id_livr']) and isset($_POST['prix']) and isset($_POST['id_livreur'])
and isset($_POST['id_res']))
{
$id_livr=$_POST['id_livr'];
$prix=$_POST['prix'];
$id_livreur=$_POST['id_livreur'];
$id_res=$_POST['id_res'];

$livr1=new livr($id_livr,$prix,$id_livreur,$id_res);
$livr1C=new livrC($livr1);
$livr1C->ajouterLivr($livr1);
header('Location: afficherLivr.php');

}
?>