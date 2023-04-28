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
                        <img class="img-fluid" src="assets/images/logo-parking.png" alt="">
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
                            <a class="nav-link scroll" href="{{url('client')}}">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="{{url('client')}}#services-section">Reserver</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link scroll" href="{{url('demande')}}">contacter</a>
                        </li>

                    </ul>

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
                        <img class="img-fluid" src="assets/images/logo-parking.png" alt="">
                    </figure>
                    <p class="text-size-16 mb-lg-4 mb-md-3 mb-3">Sur cette plat-form chaque conducteur de véhicule automobile peut reserver une place de stationnement près de chez lui en sécurité.</p>
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
                        <li><i class="fas fa-caret-right"></i><a class="text-decoration-none font-weight-normal" href="index.html">Accueil</a></li>
                        <li><i class="fas fa-caret-right"></i><a class="text-decoration-none font-weight-normal" href="team.html">Reserver</a></li>
                        <li><i class="fas fa-caret-right"></i><a class="text-decoration-none font-weight-normal" href="services.html">Faire demande</a></li>
                        </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 text-sm-left text-center d-sm-block d-none">
                <div class="footer-info-content">
                    <h5 class="font-weight-normal">Get in Touch</h5>
                    <ul class="list-unstyled mb-0">
                        <li><span class="font-weight-bold">Email:</span><a class="text-decoration-none font-weight-normal" href="mailto:info@hotline.com"> infoAuto@gmail.com</a></li>
                        <li><span class="font-weight-bold">Phone:</span><a class="text-decoration-none font-weight-normal" href="tel:+12345678900"> +221 77 993 42 43</a></li>
                        <li><span class="font-weight-bold">Fax:</span><a class="text-decoration-none font-weight-normal" href="#"> +333 749 38 48</a></li>
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
