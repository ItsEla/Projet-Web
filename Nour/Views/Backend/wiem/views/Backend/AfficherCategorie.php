
<?php 
include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\config.php'
;
include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\categorieC.php'
;
include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\components\components.php'
;


 $categorie=new categorieC();
        $listeCategorie=$categorie->affichercategories();


?> 


<!DOCTYPE html>
<html lang="en"  >

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Melodyo </title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
 
<link href="css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
     
</head>

<body id="page-top">


    <!-- Sidebar -->
    

       <?php components::sidebar(); ?> 

    
        <!-- Begin Page Content -->
        <div id="content-wrapper" class="d-flex flex-column">
      
      <!-- Main Content -->
      <div id="content">
          
  
          <div class="card shadow-lg h-75 m-4 mt-8">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold " style="color: black"><img src="../Backend/images/sheet2.png" ><b>Liste des Categories</b></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              
      
                  <thead>
                    <tr>

                    <th>id_categorie</th>
                    <th>description</th>
                   <th>Actions</th>
                    </tr>
                  </thead>
            
                  <br>
                  <br>

                  <?php
                 
                      foreach($listeCategorie as $row){ ?>
                         <tr>
                        <td><?php echo $row['id_cat']; ?></td>
                        <td><?php echo $row['nom_cat']; ?></td>
                        
                          <td>
                             <a href="../Frontend/shop.php?nom_cat=<?php echo $row['nom_cat']; ?>" class=" btn-icon-split"><span class="glyphicon glyphicon-eye-open"></span>
                            </a>
                            <a href="modifierCategorie.php?id_cat=<?php echo $row['id_cat']; ?>" class=" btn-icon-split"><span class='glyphicon glyphicon-pencil'></span>
                            </a>
                        
                              <a href="supprimerCategorie.php?id_cat=<?php echo $row['id_cat']; ?>"onclick="return confirm('Voulez-vous supprimer la categorie <?php echo $row['id_cat'];?>');" class=" btn-icon-split" class="alert alert-danger">
                           
                            <span class='glyphicon glyphicon-trash'></span>
                          </a>

                         
                          </td>
                        

                        </tr>
                          
                      
                        <?php
                      }  
                    ?>
                    
                 </thead>
                  </tbody>
                </table>
                <td>
                 
                               

                           </span>
                              

                            </a>
                          </td>
               
              </div>
            </div>
          </div>

        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Melodyo 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-success" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
