<?php
session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <!-- set the encoding of your site -->
  <meta charset="utf-8">
  <!-- set the viewport width and initial-scale on mobile devices -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- set the price table -->
  <meta name="Petshop" content="yes">
  <!-- set the HandheldFriendly -->
  <meta name="HandheldFriendly" content="True">
  <!-- set the price table style -->
  <meta name="Petshop" content="black">
  <!-- set the description -->
  <meta name="description" content="Petshop HTML5 Template">
  <title>Melodyo</title>
  <!-- include the site stylesheet -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600%7CNunito:400,600,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/icon-fonts.css">
  <link rel="stylesheet" type="text/css" href="css/plugins.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body>
  <div id="wrapper">
    <header id="header">
      <div class="header-area container">
        
        <div class="row">
          <div class="col-xs-12 hidden visible-xs">
            <ul class="list-unstyled social-network text-center">
              <li><a href="mailto:Melodyo@support.com"><i class="icon-message" aria-hidden="true"></i></a></li>
              <li><a href="tell:000000000"><i class="icon-phone-call" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="icon-user" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="icon-cart" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-6 hidden-xs">
            <ul class="list-unstyled contact-info">
              <li>
                <a href="mailto:Melodyo@support.com" class="icon pull-left"><i class="icon-message"></i></a>
                <div class="align-left pull-left hidden-xs">
                  <strong>Mail us:</strong>
                  <a href="mailto:Melodyo@support.com">Melodyo@support.com</a>
                </div>
              </li>
              <li>
                <a href="tell:000000000" class="icon pull-left"><i class="icon-phone-call"></i></a>
                <div class="align-left pull-left hidden-xs">
                  <strong>Call us:</strong>
                  <a href="tell:000000000">(+1) 00000000</a>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-6 hidden-xs">
            <div class="social-list">
              <ul class="list-unstyled social-network">
                <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
              <ul class="list-unstyled account-cart">
                <li><a href="profil.php?ID=<?php echo $_SESSION['ID'];?>"><i class="icon-user"></i><span class="hidden-xs">Account</span></a></li>

                <li><a href="cart.<?php  ?>"><i class="icon-cart"></i><span class="hidden-xs">Cart</span></a></li>
                <li><a href="deconnexion.php"><i class="icon-user"></i><span class="hidden-xs">Déconnexion</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="logo pull-left hidden visible-xs">
              <a href="index-2.html"><img class="img-responsive" src="images/logoo.png" alt="PetShop"></a>
            </div>
            <a href="#" class="nav-opener pull-right hidden visible-xs"><i class="fa fa-bars"></i></a>
            <nav id="nav">
              <ul class="list-unstyled text-uppercase menu-left">
                <li><a href="index-2.html">home</a></li>
                <li>
                  <a href="javascript:void(0);">pages <i class="fa fa-angle-down"></i></a>
                  <ul class="list-unstyled text-uppercase dropdown">
                    <li><a href="services.php">services</a></li>
                    <li><a href="aboutus.php">about us</a></li>
                    <li><a href="AjouterReclamation1.php">Passer une reclamation</a></li>
                    
                     <li><a href="events.php">Nos Evenements</a></li>
                     <li><a href="../Backend/Ajoutinscription2.php">s'inscrire dans un evenement</a></li>
                    

                    <li><a href="404page.html">404 page</a></li>
                  </ul>
                </li>
                <li>
                  <a href="javascript:void(0);">shop <i class="fa fa-angle-down"></i></a>
                  <ul class="list-unstyled text-uppercase dropdown">
                    <li><a href="shop.php">Shop</a></li>
                    
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="checkout.php">Checkout</a></li>
                  </ul>
                </li>
                <li class="logo hidden-xs"><a href="index-2.html"><img class="img-responsive" src="images/logoo.png" alt="PetShop"></a></li>
                <li class="mar-zero">
                  <a href="javascript:void(0);">blog</a>
                  <ul class="list-unstyled text-uppercase dropdown">
                    <li><a href="blog-standard.html">Blog Standard</a></li>
                  
                  </ul>
                </li>
                <li><a href="contactus.php">contact us</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
        </header>
    <main id="main">
      <section class="hero-sec bg-full" style="background-image:url(images/imgg01.jpg);">
        <div class="caption">
          
          <h1 class="heading text-center">Passer votre réclamation</h1>
          
        </div>
      </section>
      <section class="contact-sec container">
        <div class="row">
          <div class="col-xs-12 col-sm-8">
            <h2 class="heading heading-dark">Réclamez-ici</h2>
            <form class="contact-form" action="AjoutReclamation.php" method="POST" onsubmit="return validate_formcat()">
              <fieldset>
                  <div class="card-body">
            
            
                    <p>Veuillez remplire le formulaire pour passer un reclamation .</p>
    
        <!-- Begin Page Content -->
       
      <!-- Main Content -->
      <div id="content">

        <div class="card shadow-lg m-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold " style="color: black;"><img src="../Backend/images/sheet2.png" >Ajout d'une Réclamation</h6>
          </div>
          <div class="card-body">
            
            <form action="AjoutReclamation.php" method="POST" onsubmit="return validate_formcat()">
                <div class="form-inline">
                  <div class="form-group col-md-6">
                    <input type="number" class="form-control w-100 mt-2 mb-2" name="ID" id="ID" placeholder="ID Reclamation">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control w-100 mt-2 mb-2" name="Email" id="Email" placeholder="Votre e-mail">
                  </div>
                   <div class="form-group col-md-6">
                    <input type="text" class="form-control w-100 mt-2 mb-2" name="Probleme" id="Probleme" placeholder="Type de probleme">
                  </div>
                   
                    <div class="form-group col-md-6">
                    <input type="text" class="form-control w-100 mt-2 mb-2" name="Cause" id="Cause" placeholder="expliquer votre cause">
                  </div>
                  
                <button type="submit" class="btn btn-success mt-2 mb-2">Ajouter dans la base de données</button>
            </form>

          </div>
        </div>

        <!-- Topbar -->
        <!-- <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"> -->

          
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

        <!-- Begin Page Content -->
       <div class="col-xs-12 col-sm-4 text-center">
           
          </div>
        </div>
      </section>
      <section class="callout" style="background-color:rgba(0, 0, 0, 0.877);padding-top: 30px;">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <h2>Get 50% offer for all Musicsheets</h2>
            </div>
            <div class="col-xs-12 col-sm-6">
              <a class="btn-primary text-uppercase text-center lg-round" href="#">coupon code : Melodyo1234</a>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-4 abt-txt">
            <div class="footer-logo">
              <a href="#"><img src="images/logoo.png" alt="Pet Shop" class="img-responsive"></a>
            </div>
          
            <ul class="contact-list list-unstyled">
              <li><span class="icon"><i class="fa fa-map-signs" aria-hidden="true"></i></span> No: 801,  Melodyo shop, Australia.</li>
              <li><a href="mailto:Melodyoshop@mail.com"><span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>Melodyoshop@mail.com</a></li>
              <li><a href="#"><span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span> (+23) 0000000 000 </a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-2">
            <h3>Information</h3>
            <ul class="info-list list-unstyled">
              <li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Buy MusicSheets</a></li>
              <li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Book MusicSHeets</a></li>
              <li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Free Shipping</a></li>
            
            </ul>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <h3>Instagram</h3>
            <ul class="insta-list list-unstyled">
              <li><a href="#"><img src="images/imgg07.jpg" alt="footer-img" class="img-responsive"></a></li>
              <li><a href="#"><img src="images/imgg05.png" alt="footer-img" class="img-responsive"></a></li>
              <li><a href="#"><img src="images/imgg09.jpg" alt="footer-img" class="img-responsive"></a></li>
              <li><a href="#"><img src="images/imgg10.jpg" alt="footer-img" class="img-responsive"></a></li>
              <li><a href="#"><img src="images/imgg03.jpg" alt="footer-img" class="img-responsive"></a></li>
              <li><a href="#"><img src="images/imgg04.jpg" alt="footer-img" class="img-responsive"></a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <h3>Newsletter</h3>
            <div class="newsletter">
              <form class="newsletter-form" action="#">
                <fieldset>
                  <input class="form-control" placeholder="Email" type="email">
                  <button class="submit-btn round" type="submit"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script src="js/jquery.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/jquery.main.js"></script>
</body>

</html>
