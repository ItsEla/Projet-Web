

<?php


include 'C:\wamp64\www\melodyo\Core\config.php';
include 'C:\wamp64\www\melodyo\Core\evenementOps.php';
include 'C:\wamp64\www\melodyo\Core\categorieOps.php';
include 'C:\wamp64\www\melodyo\Core\inscriptionOps.php';



$F = new evenementOps();
$liste = $F->getevenement();
$C = new categorieOps();
$listee = $C->getcategorie();
$I = new inscriptionOps();
$list = $I->getinscription();

?>


<!DOCTYPE html>

<!-- Mirrored from htmlbeans.com/html/petshop/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Nov 2019 02:01:31 GMT -->
<head>
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
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
							<ul class="list-unstyled account-cart">
								<li><a href="#"><i class="icon-user"></i><span class="hidden-xs">Account</span></a></li>
								<li><a href="#"><i class="icon-cart"></i><span class="hidden-xs">Cart</span></a></li>
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
										<li><a href="services.html">services</a></li>
										<li><a href="aboutus.html">about us</a></li>
										<li><a href="create.php">Donner un AVIS</a></li>
										 <li><a href="index.php">un Avis en etoile</a></li>
										 <li><a href="events.php">Nos Evenements</a></li>
										 <li><a href="../Backend/Ajoutinscription2.php">s'inscrire dans un evenement</a></li>
										 <li><a href="Modifierinscription2.php">Modifier votre inscription </a></li>
										<li><a href="404page.html">404 page</a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0);">shop <i class="fa fa-angle-down"></i></a>
									<ul class="list-unstyled text-uppercase dropdown">
										<li><a href="shop.php">Shop</a></li>
										
										<li><a href="cart.html">Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
									</ul>
								</li>
								<li class="logo hidden-xs"><a href="index-2.html"><img class="img-responsive" src="images/logoo.png" alt="PetShop"></a></li>
								<li class="mar-zero">
									<a href="javascript:void(0);">blog</a>
									<ul class="list-unstyled text-uppercase dropdown">
										<li><a href="blog-standard.html">Blog Standard</a></li>
									
									</ul>
								</li>
								 <li><a href="contact-us.html">contact us</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<main id="main">
						<section class="hero-sec bg-full" style="background-image:url(images/imgg01.jpg);">
				<div class="caption">
					<h1 class="heading text-center">Nos Evenements</h1>
				<br>
				<br>	
						<p align="center"><a href="../Backend/Ajoutinscription2.php" class="btn-primary text-uppercase text-center lg-round">S'incrire</a></p>

					</div>
				</div>
			</section>
		
<br>
<br>


              <section class="widget">
              	<div class="row">
                <ul class="list-unstyled category-list">

 <div style="text-align: center;" > 
                  <?php foreach ($liste as $row):?>
                
                  	<?php echo '<img  width="700" height="300"  src="../Backend/images/'  . $row["image"] . '">'; ?>  

 <div style="text-align: center; padding: 16px; " > 


                  <h4  style="font-family: Arial, Helvetica, sans-serif; font-size: 30px; color: #00cc66 ;"> DATE :   <?=$row['datee']?></a></h4>
                   <div style="text-align: center;" > 


                    <h5 style=" font-family: Arial, Helvetica, sans-serif; font-size: 25px; color: #000000; " >  NOM :   <?=$row['name']?></a> </h5>
                   <h5 style=" font-family: Arial, Helvetica, sans-serif;font-size: 25px; color: #000000;"> CATEGORIE :    <?php $categorie = categorieOps::getcategories($row['id']); foreach($categorie as $c) echo $c['1']; ?></a> </h5>
                    <h5 style=" font-family: Arial, Helvetica, sans-serif;font-size: 25px; color: #434343;"> DESCRIPTION :    <?=$row['descr']?></a> <h5></li> 

           </div>

</div>


                 <?php endforeach;?>
                 </ul>
    <?php
  
    $address = "Conservatoire National de Musique de Tunis";
    $address = str_replace(" ", "+", $address);
    ?>
    <iframe align="right" width="100%" height="500" frameborder="0" style="border:0; padding-top: 6px;" allowfullscreen src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>
<form method="POST">
                        

               
              </section>
              
              <div>

                

  </div>

</div>
<!-- Card -->
<br>
<br>
<br>
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
					
				</div>
			</div>
		</footer>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/jquery.main.js"></script>
	
</body>


<!-- Mirrored from htmlbeans.com/html/petshop/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Nov 2019 02:01:31 GMT -->
</html>




