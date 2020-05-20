<?php

    class components{
        public static function header(){
            ?>
                <div id="wrapper">
            <header id="header">
                <div class="header-area container">
                    <div class="row">
                        <div class="col-xs-12 hidden visible-xs">
                            <ul class="list-unstyled social-network text-center">
                                <li><a href="mailto:info@all-for-pets.tn"><i class="icon-message" aria-hidden="true"></i></a></li>
                                <li><a href="tell:+216 93 651 030"><i class="icon-phone-call" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.facebook.com/AllForPetsLaSoukra/" target="_BLANK"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCu_pyx-67zXCXYAy4k_-hhA?disable_polymer=true" target="_BLANK"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/animalerie_all_for_pets/" target="_BLANK"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="icon-user" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="icon-cart" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 hidden-xs">
                            <ul class="list-unstyled contact-info">
                                <li>
                                    <a href="mailto:info@all-for-pets.tn" class="icon pull-left"><i class="icon-message"></i></a>
                                    <div class="align-left pull-left hidden-xs">
                                        <strong>Mail us:</strong>
                                        <a href="mailto:info@all-for-pets.tn">info@all-for-pets.tn</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="icon pull-left"><i class="icon-phone-call"></i></a>
                                    <div class="align-left pull-left hidden-xs">
                                        <strong>Call us:</strong>
                                        <a href="#">+216 93 651 030</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 hidden-xs">
                            <div class="social-list">
                                <ul class="list-unstyled social-network">
                                    <li><a href="https://www.facebook.com/AllForPetsLaSoukra/" target="_BLANK"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCu_pyx-67zXCXYAy4k_-hhA?disable_polymer=true" target="_BLANK"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.instagram.com/animalerie_all_for_pets/" target="_BLANK"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                                <ul class="list-unstyled account-cart">
                                    <li><a href="#"><i class="icon-user"></i><span class="hidden-xs">Se connecter</span></a></li>
                                    <li><a href="#"><i class="icon-cart"></i><span class="hidden-xs">Panier</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="logo pull-left hidden visible-xs">
                                <a href="Index.php"><img class="img-responsive" src="images/logo.png" alt="PetShop"></a>
                            </div>
                            <a href="#" class="nav-opener pull-right hidden visible-xs"><i class="fa fa-bars"></i></a>
                            <nav id="nav">
                                <ul class="list-unstyled text-uppercase menu-left">
                                    <li><a href="Index.php">home</a></li>
                                    <li>
                                        <a href="javascript:void(0);">pages <i class="fa fa-angle-down"></i></a>
                                        <ul class="list-unstyled text-uppercase dropdown">
                                            <li><a href="services.html">services</a></li>
                                            <li><a href="aboutus.html">about us</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="404page.html">404 page</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop.php">Shop</a>
                                    </li>
                                    <li class="logo hidden-xs"><a href="Index.php"><img class="img-responsive" src="images/logo.png" alt="PetShop"></a></li>
                                    <li class="mar-zero">
                                        <a href="javascript:void(0);">blog</a>
                                        <ul class="list-unstyled text-uppercase dropdown">
                                            <li><a href="blog-standard.html">Blog Standard</a></li>
                                            <li><a href="single-blog.html">Single Blog</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact-us.html">contact us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <?php
        }

        public static function footer(){
            ?>
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 abt-txt">
                            <ul class="contact-list list-unstyled">
                                <li><span class="icon"><i class="fa fa-map-signs" aria-hidden="true"></i></span> No: 801, petty shop, Australia.</li>
                                <li><a href="mailto:info@all-for-pets.tn"><span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>info@all-for-pets.tn</a></li>
                                <li><a href="#"><span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span> 
                                +216 93 651 030 </a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <h3>Instagram</h3>
                            <ul class="insta-list list-unstyled">
                                <li><a href="#"><img src="images/img27.jpg" alt="footer-img" class="img-responsive"></a></li>
                                <li><a href="#"><img src="images/img28.jpg" alt="footer-img" class="img-responsive"></a></li>
                                <li><a href="#"><img src="images/img29.jpg" alt="footer-img" class="img-responsive"></a></li>
                                <li><a href="#"><img src="images/img30.jpg" alt="footer-img" class="img-responsive"></a></li>
                                <li><a href="#"><img src="images/img31.jpg" alt="footer-img" class="img-responsive"></a></li>
                                <li><a href="#"><img src="images/img32.jpg" alt="footer-img" class="img-responsive"></a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <h3>Facebook</h3>
                            <ul class="insta-list list-unstyled">
                                <li><a href="#"><img src="images/img27.jpg" alt="footer-img" class="img-responsive"></a></li>
                                <li><a href="#"><img src="images/img28.jpg" alt="footer-img" class="img-responsive"></a></li>
                                <li><a href="#"><img src="images/img29.jpg" alt="footer-img" class="img-responsive"></a></li>
                                <li><a href="#"><img src="images/img30.jpg" alt="footer-img" class="img-responsive"></a></li>
                                <li><a href="#"><img src="images/img31.jpg" alt="footer-img" class="img-responsive"></a></li>
                                <li><a href="#"><img src="images/img32.jpg" alt="footer-img" class="img-responsive"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        <?php
        }

        public static function sidebar(){
           ?>
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar" >

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Index.php">
                <div class="sidebar-brand-icon rotate-n-15" >
                   
                </div>
                 <img src="../Backend/images/sheet1.png">
                <div class="sidebar-brand-text mx-3">Melodyo</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider  mb-0 mt-2">

                <!-- Nav Item - Statistiques -->
                <li class="nav-item">
                <a class="nav-link" href="Index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Statistiques</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                CRUD
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Ajout</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                   <h6 class="collapse-header">Menu des ajouts:</h6>
            <a class="collapse-item" href="AjouterReclamation1.php">Ajouter une réclamation</a>
            <a class="collapse-item" href="AjouterClient1.php">Ajouter un Client</a>
            <a class="collapse-item" href="create.php">Ajouter un Avis</a>
            <a class="collapse-item" href="ajoutCategory.php">Ajouter une categorie</a>
            <a class="collapse-item" href="Ajoutevenement2.php">Ajouter un Evénement</a>
            <a class="collapse-item" href="Ajoutcategorie2.php">Ajouter une Catégorie </br>d'évenement</a>
            <a class="collapse-item" href="Ajoutinscription2.php">s'inscrire dans un </br> Evenement</a>
                    </div>
                </div>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Listes</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Les differents elements:</h6>
            <a class="collapse-item" href="AfficherReclamation.php">Lister les réclamations</a>
            <a class="collapse-item" href="AfficherClient.php">Lister les Clients</a>
              <a class="collapse-item" href="indexAvis.php">Lister les Avis</a>
               <a class="collapse-item" href="afficherCategorie.php">Lister les categories</a>
                 <a class="collapse-item" href="Listeevenement.php">Lister les Evénements</a>
                    <a class="collapse-item" href="Listecategorie.php">Lister les Catégories</br>Evenement</a>
                    <a class="collapse-item" href="Listeinscription.php">Lister les Inscriptions</br> dans un Evenement</a>
                    </div>
                </div>
                </li>

            

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

                </ul>
                <!-- End of Sidebar -->
            <?php
        }
    }

?>