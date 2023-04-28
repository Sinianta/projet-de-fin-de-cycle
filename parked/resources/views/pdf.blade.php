<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ma page2</title>
	<link rel="stylesheet" href="assets/css/laye.css">
</head>
<body>

	<div id="hh" >
          <img src="assets/images/logo-parking.png"  style="margin-left: 10px; float: left;">
		<h3></h3>
		<h2></h2>
	    <h3 style="font-size: 25px;">------</h3>
		<h3><b>Facture du payement</b></h3>
	</div>
	<div class="ligne"></div>
	<p style="text-align: right;">
	   <a id="droite">Reservation faite le: {{$date}}</a>
	</p>
	<div id="centre" style="text-align:center;">
		<h3>Parking concerner: {{$parking->etiquette}}</h3>
		<h3></h3>
	</p>
</div>
    <div style="text-align: left;">
        <a><b><h1>CLIENT</h1></b></a>
    </div>
	<div style="text-align: left;">
		<a><b><h3>{{$reservation->prenom}} {{$reservation->nom}}</h3></b></a>
	</div>
    <p style="text-align: left;">
		<a>NIN: {{$reservation->nin}}</a>
	</p>
	<p style="text-align: left;">
		<a>Numéro de téléphone: {{$reservation->telphone}}</a>
	</p>
	<p style="text-align: left;">
		<a>Email: {{$reservation->email}}</a>
	</p>
	<table align="center">
		<caption><h3>Reservation</h3></caption>
		       <tr>
		       	<th colspan="3">Code de la reservation: {{$reservation->code}}</th>
		       </tr>
		       <tr>
		       	<th>Objet concerné:</th>
		       	<th>Etiquette</th>
		       	<th>Valeur enregistré</th>
		       </tr>
               <tr>
                    <td rowspan="3">Voiture Info:</td>
                    <td>Place Reservé :</td>
                    <td>{{$place->numero}}</td>

               </tr>
               <tr>
                    <td>Marque de la voiture: </td>
                    <td>{{$reservation->marque}}</td>
               </tr>
               <tr>
                    <td>Plaque de la voiture: </td>
                    <td>{{$reservation->plaque}}</td>
               </tr>

                   <tr>
                    <td rowspan="3">Temps demandé:</td>
                    <td>Date de reservation</td>
                    <td>{{$reservation->date_res}}</td>

               </tr>
               <tr>
                    <td>Heure d'arrivé : </td>
                    <td>{{$reservation->date_arrive}}</td>
               </tr>
               <tr>
                    <td>Heure de départ : </td>
                    <td>{{$reservation->date_depart}}</td>
               </tr>

          </table>

     <p>
        <a>Montant payer: {{$montant}}</a>
   </p>

        <p></p>
        <nav style="margin-top: 150px;">
             <a><b>NB:</b> La facture doit être concerver par client et doit être apporter au moment de l'arrivé de la voiture</a>
        </nav>
        {{-- <div>
            <img src="assets/images/laye.jpg" style="margin-left: 500px; ">

        </div> --}}
        <nav>
        <div class="ligne" style="margin-top: -80px;"></div>
   </nav>
        <div style="margin-top: 50px;"></div>
</body>
</html>
