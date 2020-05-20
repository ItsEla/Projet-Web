	<?php
session_start();
 
$bdd = new PDO('mysql:host=127.0.0.1;dbname=melodyo', 'root', '');
 
if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM client WHERE Email = ? AND Mdp = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['ID'] = $userinfo['ID'];
         $_SESSION['Nom'] = $userinfo['Nom'];
         $_SESSION['Email'] = $userinfo['Email'];
         header("Location: shop.php?ID=".$_SESSION['ID']);
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
<html>
   <head>
      <title>melodyo</title>
      <meta charset="utf-8">
        <title>Login </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/css/util.css">
  <link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->

   </head>
   <body>
      <div class="limiter">
    <div class="container-login100" style="background-image: url('images/green.jpg');">
      <div class="wrap-login100 p-t-30 p-b-50">
        <span class="login100-form-title p-b-41">
Bienvenue !        </span>
       <form class="login100-form validate-form p-b-33 p-t-5" id="form1" name="form1" method="POST" action="connexion.php"> 
         <form method="POST" action="">
             <div class="wrap-input100 validate-input" data-validate = "Enter votre Email">
            <input class="input100" type="email" name="mailconnect" placeholder="E-mail" />
            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
          </div>
          <div class="wrap-input100 validate-input" data-validate="Enter votre Mot de passe">
            <input  class="input100" type="password" name="mdpconnect" placeholder="Mot de passe" />
            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
          </div>
            
            <div class="container-login100-form-btn m-t-32">
            <input class="login100-form-btn" type="submit" name="formconnexion" value="Se connecter !" />
             </div>
           <center>
             <a  href="index.php"><u>S'inscrire</u></a></br>
             <a  href="recuperation.php"><u>Motdpass oublié </u></a>
            </center>
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>
   </body>
</html>