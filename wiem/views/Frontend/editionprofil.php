<?php
session_start();
 
$bdd = new PDO('mysql:host=127.0.0.1;dbname=melodyo', 'root', '');
 
if(isset($_SESSION['ID'])) {
   $requser = $bdd->prepare("SELECT * FROM client WHERE ID = ?");
   $requser->execute(array($_SESSION['ID']));
   $user = $requser->fetch();
   if(isset($_POST['newNom']) AND !empty($_POST['newNom']) AND $_POST['newNom'] != $user['Nom']) {
      $newNom = htmlspecialchars($_POST['newNom']);
      $insertNom = $bdd->prepare("UPDATE client SET Nom = ? WHERE ID = ?");
      $insertNom->execute(array($newNom, $_SESSION['ID']));
      header('Location: profil.php?ID='.$_SESSION['ID']);
   }
   if(isset($_POST['newPrenom']) AND !empty($_POST['newPrenom']) AND $_POST['newPrenom'] != $user['Prenom']) {
      $newPrenom = htmlspecialchars($_POST['newPrenom']);
      $insertPrenom = $bdd->prepare("UPDATE client SET Prenom = ? WHERE ID = ?");
      $insertPrenom->execute(array($newPrenom, $_SESSION['ID']));
      header('Location: profil.php?ID='.$_SESSION['ID']);
   }
   if(isset($_POST['newtel']) AND !empty($_POST['newtel']) AND $_POST['newtel'] != $user['Telephone']) {
      $newtel = htmlspecialchars($_POST['newtel']);
      $inserttel = $bdd->prepare("UPDATE client SET Telephone = ? WHERE ID = ?");
      $inserttel->execute(array($newtel, $_SESSION['ID']));
      header('Location: profil.php?ID='.$_SESSION['ID']);
   }
   if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['Email']) {
      $newmail = htmlspecialchars($_POST['newmail']);
      $insertmail = $bdd->prepare("UPDATE client SET Email = ? WHERE ID = ?");
      $insertmail->execute(array($newmail, $_SESSION['ID']));
      header('Location: profil.php?ID='.$_SESSION['ID']);
   }
   if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) {
      $mdp1 = sha1($_POST['newmdp1']);
      $mdp2 = sha1($_POST['newmdp2']);
      if($mdp1 == $mdp2) {
         $insertmdp = $bdd->prepare("UPDATE client SET Mdp = ? WHERE ID = ?");
         $insertmdp->execute(array($mdp1, $_SESSION['ID']));
         header('Location: profil.php?ID='.$_SESSION['ID']);
      } else {
         $msg = "Vos deux mdp ne correspondent pas !";
      }
   }
      if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
   $tailleMax = 2097152;
   $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
   if($_FILES['avatar']['size'] <= $tailleMax) {
      $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
      if(in_array($extensionUpload, $extensionsValides)) {
         $chemin = "membres/avatars/".$_SESSION['ID'].".".$extensionUpload;
         $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
         if($resultat) {
            $updateavatar = $bdd->prepare('UPDATE client SET avatar = :avatar WHERE ID = :ID');
            $updateavatar->execute(array(
               'avatar' => $_SESSION['ID'].".".$extensionUpload,
               'ID' => $_SESSION['ID']
               ));
            header('Location: profil.php?ID='.$_SESSION['ID']);
         } else {
            $msg = "Erreur durant l'importation de votre photo de profil";
         }
      } else {
         $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
      }
   } else {
      $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
   }
}
?>
<html>
   <head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
<style>
.card {
  box-shadow: 0 20px 40px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 15px;
  color: white;
}

button:hover, a:hover {
  opacity: 0.7;
}

</style>
</head>
      
   <body>
      <div align="center">
         <h2 style="text-align:center" ><i>Edition de mon profil</i></h2>
         <div class="card">
         <div align="center">
            <form method="POST" action="" enctype="multipart/form-data"></br></br>
               <label><b>Nom :</b></label></br></br>
               <input style="width: 250; " type="text" name="newNom" placeholder="Nom" value="<?php echo $user['Nom']; ?>" /><br /><br />
               <label><b>Prénom :</b></label></br></br>
               <input style="width: 250;" type="text" name="newPrenom" placeholder="Prenom" value="<?php echo $user['Prenom']; ?>" /><br /><br />
               <label><b>Télephone :</b></label></br></br>
               <input  style="width: 250;" type="text" name="newtel" placeholder="+216" value="<?php echo $user['Telephone']; ?>" /><br /><br />
               <label><b>Mail :</b></label></br></br>
               <input  style="width: 250;" type="text" name="newmail" placeholder="E-Mail" value="<?php echo $user['Email']; ?>" /><br /><br />
               <label><b>Mot de passe :</b></label></br></br>
               <input  style="width: 250;" type="password" name="newmdp1" placeholder="Mot de passe"/><br /><br />
               <label><b>Confirmation - mot de passe :</b></label></br></br>
               <input  style="width: 250;" type="password" name="newmdp2" placeholder="Confirmation du mot de passe" /><br /><br />
                <label><b>avatar</b></label></br></br>
               <input type="file" name="avatar"/><br /><br />
               <button><input type="submit" value="Mettre à jour mon profil !" /></button></br></br>
               
            </form>
            <?php if(isset($msg)) { echo $msg; } ?>
         </div>
      </div>
   </body>
</html>
<?php   
}
else {
   header("Location: connexion.php");
}
?>