<?php
session_start();
 
$bdd = new PDO('mysql:host=127.0.0.1;dbname=melodyo', 'root', '');
 
if(isset($_GET['ID']) AND $_GET['ID'] > 0) {
   $getID = intval($_GET['ID']);
   $requser = $bdd->prepare('SELECT * FROM client WHERE ID = ?');
   $requser->execute(array($getID));
   $userinfo = $requser->fetch();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <title>TUTO PHP</title>
      <meta charset="utf-8">
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

<h2 style="text-align:center" ><i>Bonjour <?php echo $userinfo['Prenom']; ?></i></h2>

<div class="card">
   <?php
          if(!empty($userinfo['avatar']))
            {
               ?>
               <img src="membres/avatars/<?php echo $userinfo['avatar'];?>" width="150">
               <?php
            }
            ?>
           <br /><br /> 
<b> Nom:</b></br> <?php echo $userinfo['Nom']; ?>
         <br /> <br />
 <b>Prénom :</b></br> <?php echo $userinfo['Prenom']; ?>
         <br /> <br />
 <b>Télephone :+216</b></br> <?php echo $userinfo['Telephone']; ?>
         <br /> <br />
<b> E-Mail :</b></br> <?php echo $userinfo['Email']; ?>
         <br /> <br />
         <?php
         if(isset($_SESSION['ID']) AND $userinfo['ID'] == $_SESSION['ID']) {
         ?>
         </br>

  <p><button><a href="editionprofil.php">Editer mon profil</a></button>
  
  <button><a href="shop.php">Retour<a></button>
    <button><a href="deconnexion.php">Se déconnecter</a></button>
  <button> <a href="SuppClient.php?ID=<?php echo $row['ID']; ?>"onclick="return confirm('Voulez-vous supprimer le client n° <?php echo $row['ID'];?>');"  class="alert alert-danger">Supprimer Mon Compte<a></button>
                                
                                
                    
         <?php
         }
         ?></p>
</div>

</body>
</html>

 
<?php   
}
?>