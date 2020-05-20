<?PHP
include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\categorieC.php'
;


 $categorieC=new categorieC();
  if (isset($_GET["id_cat"])){
    $categorieC->supprimercategorie($_GET["id_cat"]);
    header('Location: AfficherCategorie.php');
}

?>