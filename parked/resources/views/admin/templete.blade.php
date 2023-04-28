<?php
if (session_status() === PHP_SESSION_NONE){
        session_start();
    }
require '../resources/views/admin/fonction.blade.php';
administrateur_connecter();
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Home | Hotline</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hotline is the perfect WHMCS HTML template for your Hosting Business">
    <meta name="keywords" content="Web hosting, WHMCS template, hosting template">
    <meta name="author" content=“DesigningMedia”>
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">
    <link rel="stylesheet" href="assets/css/custom-style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/special-classes.css" type="text/css">
</head>
<body>

<div class="banner-section-outer">
<!-- MAIN HEADER -->
    <header class="header">
    <div class="main-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a class="navbar-brand" href="index.html">
                        <figure class="navbar-logo mb-0">
                        <img class="img-fluid" src="assets/images/log-admin.png" alt="">
                        </figure>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item ">
                            <a class="nav-link scroll" href="{{ route('administrateur.index') }}">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="/add">Ajouter parking</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Gestion des personnels
                            </a>
                            <div class="dropdown-menu list-unstyled hotline-dropdown" aria-labelledby="navbarDropdown">
                                <ul class="dropdown-menu-list list-unstyled">
                                    <li><a class="dropdown-item scroll hotline-menu" href="/addPersonnel">Ajouter un personnel</a></li>
                                    <li><a class="dropdown-item scroll hotline-menu" href="{{url('user')}}">Voir les personnels</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <div class="login-outer-div">
                        <ul class="login-listing m-0 p-0">
                            <?php if (est_connecter()):?>
                            <li class="list-unstyled d-lg-inline-block">
                                <a class="nav-link scroll sign-up" href="{{ url('logout') }}" >Deconnexion</a>

                            </li>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>

@yield('bannier')

</div>


@yield('corp')


<!-- FOOTER -->
<section class="footer-section">
    <div class="container">
        <div class="row position-relative">
            <div class="col-xl-5 col-lg-4 col-md-5 col-sm-6 text-sm-left text-center">
                <div class="footer-logo-content">
                    <figure class="footer-logo">
                        <img class="img-fluid" src="assets/images/log-admin.png" alt="">
                    </figure>
                    <p class="text-size-16 mb-lg-4 mb-md-3 mb-3">Partie reservé à l'administrateur, dans lequel il peut ajouter ou supprimer des parkings ainsi que des personnels.</p>
                    <ul class="footer-logo-content-listing p-0 m-0">
                        <li class="list-unstyled d-inline-block"><a class="d-inline-block" href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li class="list-unstyled d-inline-block"><a class="d-inline-block" href="#"><i class="fab fa-twitter-square"></i></a></li>
                        <li class="list-unstyled d-inline-block"><a class="d-inline-block" href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li class="list-unstyled d-inline-block"><a class="d-inline-block" href="#"><i class="fab fa-pinterest-square"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 d-lg-block d-md-none d-sm-none d-none">
                <div class="footer-links-content">
                    <h5 class="font-weight-normal">Quick Links</h5>
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-caret-right"></i><a class="text-decoration-none font-weight-normal" href="">Accueil</a></li>
                        <li><i class="fas fa-caret-right"></i><a class="text-decoration-none font-weight-normal" href="">Ajout parking</a></li>
                        <li><i class="fas fa-caret-right"></i><a class="text-decoration-none font-weight-normal" href="">Gestion des personnels</a></li>
                        <li><i class="fas fa-caret-right"></i><a class="text-decoration-none font-weight-normal" href="">Connexion</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 d-md-block d-sm-none d-none">
                <div class="footer-support-content">
                    <h5 class="font-weight-normal">Support</h5>
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-caret-right"></i><a class="text-decoration-none font-weight-normal" href="https://designingmedia.com/support">Ajouter personnels</a></li>
                        <li><i class="fas fa-caret-right"></i><a class="text-decoration-none font-weight-normal" href="contact.html">liste des personnels</a></li>
                        </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 text-sm-left text-center d-sm-block d-none">
                <div class="footer-info-content">
                    <h5 class="font-weight-normal">Plus d'info</h5>
                    <ul class="list-unstyled mb-0">
                        <li><span class="font-weight-bold">Email:</span><a class="text-decoration-none font-weight-normal" href="mailto:info@hotline.com"> infoAutoParking@gmail.com</a></li>
                        <li><span class="font-weight-bold">Phone:</span><a class="text-decoration-none font-weight-normal" href="tel:+12345678900"> +221 77 853 35 43</a></li>
                        <li><span class="font-weight-bold">Fax:</span><a class="text-decoration-none font-weight-normal" href="#"> +33 77 132 32 45</a></li>
                        <li><span class="font-weight-bold">Address:</span><a class="text-decoration-none font-weight-normal" href="#"> Thiès</a></li>
                    </ul>
                </div>
            </div>
            <figure class="footer-secrion-shape-img-1 mb-0 position-absolute">
                <img class="img-fluid" src="assets/images/footer-section-shape-img-1.png" alt="">
            </figure>
        </div>
    </div>
</section>
<!-- FOOTER BAR -->
<div class="footer-bar text-center">
    <div class="container">
        <div class="row">
            <div class="footer-bar-content w-100">
                <p class="text-size-16 mb-0">Copyright ©2022 Hotline.com All Rights Reserved</p>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="assets/js/wow.js"></script>
<script>new WOW().init();</script>
<script src="assets/js/counter-script.js"></script>
</body>
</html>
