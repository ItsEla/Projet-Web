	<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=melodyo', 'root', '');
 
if(isset($_POST['forminscription'])) {
   $Nom = htmlspecialchars($_POST['Nom']);
   $Prenom = htmlspecialchars($_POST['Prenom']);
   $Telephone = htmlspecialchars($_POST['Telephone']);
   $Email = htmlspecialchars($_POST['Email']);
   $Email2 = htmlspecialchars($_POST['Email2']);
   $Mdp = sha1($_POST['Mdp']);
   $Mdp2 = sha1($_POST['Mdp2']);
   if(!empty($_POST['Nom']) AND !empty($_POST['Prenom']) AND !empty($_POST['Telephone']) AND !empty($_POST['Email']) AND !empty($_POST['Email2']) AND !empty($_POST['Mdp']) AND !empty($_POST['Mdp2'])) {
      $Nomlength = strlen($Nom);
      if($Nomlength <= 255) {
         if($Email == $Email2) {
            if(filter_var($Email, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM client WHERE Email = ?");
               $reqmail->execute(array($Email));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($Mdp == $Mdp2) {
                     $insertmbr = $bdd->prepare("INSERT INTO client(Nom,Prenom,Telephone, Email, Mdp,avatar) VALUES(?,?,?, ?, ?,?)");
                     $insertmbr->execute(array($Nom,$Prenom,$Telephone, $Email, $Mdp,'avatar.png'));
                     $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\"><u>Me connecter</u></a>";
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         } else {
            $erreur = "Vos adresses mail ne correspondent pas !";
         }
      } else {
         $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
   <html>
   <head>
      <title>signup Form</title>
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
   <script src="https://kit.fontawesome.com/a81368914c.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   </head>
   <body>
      <img class="wave" src="img/wave.png">
   <div class="container">
      <div class="img">
         <img src="img/bg.svg">
      </div>
      <div class="login-content">
      <div align="center">
         <img src="img/avatar.svg">
         <h4>Inscription</h4>
         <br /><br />
         <form method="POST" action="">
            <table>
               <tr>
                  <td align="right">
                     <label for="Nom"></label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre Nom" id="Nom" name="Nom" value="<?php if(isset($Nom)) { echo $Nom; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="Prenom"></label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre Prenom" id="Prenom" name="Prenom" value="<?php if(isset($Prenom)) { echo $Prenom; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="Telephone"></label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre Telephone" id="Telephone" name="Telephone" value="<?php if(isset($Telephone)) { echo $Telephone; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="Email"></label>
                  </td>
                  <td>
                     <input type="email" placeholder="Votre mail" id="Email" name="Email" value="<?php if(isset($Email)) { echo $Email; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="Email2"></label>
                  </td>
                  <td>
                     <input type="email" placeholder="Confirmez votre mail" id="Email2" name="Email2" value="<?php if(isset($Email2)) { echo $Email2; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="Mdp"></label>
                  </td>
                  <td>
                     <input type="password" placeholder="Votre mot de passe" id="Mdp" name="Mdp" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="Mdp2"></label>
                  </td>
                  <td>
                     <input type="password" placeholder="Confirmez votre Mdp" id="Mdp2" name="Mdp2" />
                  </td>
               </tr>
               <tr>
                  <td></td>
                  <td align="center">
                     <br />
                     <input type="submit" name="forminscription" value="Je m'inscris" />
                  </td>
               </tr>
            </table>
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>
   </body>
</html>