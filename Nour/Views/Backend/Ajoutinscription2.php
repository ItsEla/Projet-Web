<?php
include 'C:\wamp64\www\melodyo\Core\config.php';
include 'C:\wamp64\www\melodyo\Core\evenementOps.php';
include 'C:\wamp64\www\melodyo\Core\categorieOps.php';
include 'C:\wamp64\www\melodyo\Core\inscriptionOps.php';


include 'C:\wamp64\www\melodyo\Core\components\components.php';
$inscriptionOps = new inscriptionOps();
  $C = new evenementOps();
$liste = $C->getevenement();

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Formulaire</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/custom_styles.css">

  <script src="js/formvalidators/valider.js"></script>
</head>

<body >

  <!-- Page Wrapper -->

      
      <!-- Main Content -->
     <div id="content" align="center">

        <div class="card shadow-lg m-4" >
          <div class="card-header py-3" >
            <h6 class="m-0 font-weight-bold text-success">Ajout d'une inscription</h6>
          </div>
          <div class="card-body" >
            
            <form action="Ajoutinscription.php" method="POST" enctype="multipart/form-data" >
                
                  <div class="form-group col-md-6 mt-2 mb-2" >
                    <input type="number" class="form-control mt-2 mb-2" name="idc" id="idc" placeholder="ID">
                  </div>
                  <div class="form-group col-md-6 mt-2 mb-2">
                    <input type="text" class="form-control mt-2 mb-2" name="Nom" id="Nom" placeholder="Nom">
                  </div>
                  <div class="form-group col-md-6 mt-2 mb-2">
                    <input type="text" class="form-control mt-2 mb-2" name="Prenom" id="Prenom" placeholder="Prenom">
                  </div>
                  <div class="form-group col-md-6 mt-2 mb-2">
                    <input type="email" class="form-control mt-2 mb-2" name="Email" id="Email" placeholder="Email">
                  </div>
                  <div class="form-group col-md-6 mt-2 mb-2">
                    <select name="ide" id="ide" class="form-control mt-2 mb-2">
                      <option selected value="" disabled>L'événement</option>
                      <?php 
                        foreach($liste as $row){
                          echo '<option value="'.$row['ide'].'">'.$row['name'].'</option>';
                        }
                      ?>
                    </select>
                  </div>
                  
                <p align="center"><button  type="submit" class="btn btn-success mt-2" style="margin-left: 10px;height: 50px;" >Confirmer</button></p>
                
            </form>

          </div>
        </div>

        <!-- Topbar -->
        <!-- <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"> -->

          
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

        <!-- Begin Page Content -->
        <div class="container-fluid">

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      
      <!-- End of Footer -->
        <img src="../Frontend/images/imgg01.jpg" alt="HTML5 Icon" style="width:100%;height: 450px;">

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  

  <!-- Logout Modal-->
  

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>





