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
      <link rel="stylesheet" href="assets/css/style2.css" type="text/css">
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
                     <img src="assets/images/logo-parking.png" alt="">
                  </figure>
                  </a>
                  <h2 class="text-white">Payer la reservation</h2>
                  <div>
                    <h4 class="text-white">Le Montant à payer: {{$montant}} Franc</h4>
                   </div>
               </div>


<div class="login-form-box">
    <div class="login-card">
       <form action="{{ url('pdf')}}" method="get">

        <div class="form-group bg-light">
            <label for="">choisir un opérateur</label>
            <div class="btn-group bg-light" data-toggle="buttons">
                <label class="btn btn-secondary bg-light border-0 rounded-0 outline-none">
                    <input type="radio" name="orange" id="orange" autocomplete="off" value="Orange Money" checked>
                    <img src="assets/images/orange.png" alt="">
                </label>
                <label class="btn btn-secondary bg-light border-0 rounded-0 outline-none">
                    <input type="radio" name="wave" id="wave" autocomplete="off" value="Wave">
                    <img src="assets/images/wave.png" alt="">
                </label>
            </div>
        </div>




          <div class="form-group">
            <label for="exampleInputPassword1">Saisir votre Numéro*:</label>
            <input  class="input-field form-control" type="tel"  id="exampleInputPassword1" placeholder="XX XXX XX XX">
          </div>

        <div class="form-group" style="display: none">
            <input type="text" class="form-control"  name="reservation_code" id="reservation_id" value="{{$reservation->code}}">
        </div>
        <div class="form-group" style="display: none">
            <input type="text" class="form-control"  name="montant" id="montant" value="{{$montant}}">
        </div>

          <button type="submit" class="btn btn-primary">payer</button>



       </form>
    </div>

 </div>


</div>
</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://forms.app/static/embed.js" type="text/javascript"></script>
<script src="assets/js/wow.js"></script>
<script>new WOW().init();</script>
<script src="assets/js/counter-script.js"></script>
</body>
</html>

