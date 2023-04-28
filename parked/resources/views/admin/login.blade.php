<?php
$erreur = null;
if (!empty($_GET['login']) && !empty($_GET['password'])) {
    if ($_GET['login'] === 'admin' && $_GET['password'] === 'connexion') {
       session_start();
       $_SESSION['connecte'] = 1;
       header('Location: /administrateur');
       exit();
    }else {
        $erreur = "Identifiant incorrects";
    }
}

require '../resources/views/admin/fonction.blade.php';
if (est_connecter()) {
    header('Location: /administrateur');
    exit();
}

?>
<!DOCTYPE html>
<html lang="zxx">

   <head>
      <title>Login | Hotline</title>
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
      <!-- Login Form section-->
      <section class="login-form d-flex align-items-center">
            <div class="container">
               <div class="login-form-title text-center">
                  <a href="index.html">
                  <figure class="login-page-logo">
                     <img src="assets/images/log-admin.png" alt="">
                  </figure>
                  </a>
                  <h2 class="text-white">Bienvenu à l'administrateur</h2>
               </div>
                  <div class="login-form-box">
                     <div class="login-card">
                        <?php if ($erreur):?>
                        <div class="alert alert-danger">
                            <?= $erreur?>
                        </div>
                        <?php endif ?>
                        <form method="GET">
                            @csrf
                           <div class="form-group">
                             <label for="exampleInputEmail1">Entrer votre login*:</label>
                             <input class="input-field form-control" type="text" id="login" placeholder="login" name="login" required>
                           </div>
                           <div class="form-group">
                             <label for="exampleInputPassword1">Entrer votre mot de passe*:</label>
                             <input  class="input-field form-control" type="password"  id="password" placeholder="Password" name="password" required>
                           </div>
                           <button type="submit" class="btn btn-primary">Login</button>
                           <div>
                              <label class="mb-0" style="cursor: pointer;">
                              <input class="checkbox" type="checkbox" name="userRememberMe">
                              Se souvenir de moi
                              </label>
                              <a href="#" class="forgot-password float-right">Mot de passe oublié?</a>
                           </div>
                        </form>
                     </div>

                  </div>
            </div>
      </section>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="assets/js/wow.js"></script>
      <script>new WOW().init();</script>
      <script src="assets/js/counter-script.js"></script>
   </body>
</html>
