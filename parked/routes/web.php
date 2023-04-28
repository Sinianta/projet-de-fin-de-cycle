<?php

use App\Models\Parking;
use App\Models\Place;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ParkingController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\FatigueController;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendNewAnnulMail;
use Illuminate\Support\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('ListR', function () {
    $parking_id = Auth::user()->parking_id;
    $reservations = Reservation::where('parking_id',$parking_id)->get();
    return view('personnel.listReservation',compact('reservations'));
});

Route::get('/client', function () {
    $parking = Parking::all();
    return view('clients.index',compact('parking'));
});

Route::get('/addPlace', function () {
    return view('personnel.addPlace');
});

Route::get('/listPlace', function () {
    return view('personnel.listPlace');
});



// Route::get('/index', function () {
//     return view('personnel.index');
// });

Route::get('/personnel', function () {
    return view('personnel.main');
});


Route::get('/add', function () {
    return view('admin.addParking');
});

Route::get('/addPersonnel', function () {
    $parking = Parking::all();
    return view('admin.addPersonnel',compact('parking'));
});

Route::get('/liste', function () {
    return view('admin.listPersonnel');
});

Route::get('/connexion', function () {
    return view('admin.login');
});
Route::get('/logout', function () {
    return view('admin.logout');
});

Route::get('/placeEdite/{place}', function (Place $place) {

    return view('personnel.placeEdite',compact('place'));
});

Route::get('/reserver', function (Request $request) {

        $parking = $request->input('parking_id');

        $place = Place::where('parking_id',$parking)->where('disponibilite','Libre')->get();

        $nbPlace = Place::where('parking_id',$parking)->where('disponibilite','Libre')->count();

        if ($nbPlace == 0) {

            return back()->with('error', 'Dèsolé!! Mais il y a pas de place libre dans cette parking. Choisissez une autre parking.');
        }


        return view('clients.reserver',compact('place','parking'));
});

Route::get('/pdf', function (Request $request) {

    $reservation_code = $request->input('reservation_code');
    $montant = $request->input('montant');
    $date = Carbon::now();

    $reservation = Reservation::where('code',$reservation_code)->first();
    $place_id = $reservation->place_id;
    $place = Place::whereId($place_id)->first();
    $parking = Parking::find($place->parking_id)->first();


	$pdf = PDF::loadView('pdf', compact('reservation','place','parking','montant','date'));
	return $pdf->stream('mon-pdf.pdf');
});

Route::get('facture/{reservation}/{montant}', function (Reservation $reservation, int $montant) {
    $date = Carbon::now();
    $place_id = $reservation->place_id;
    $place = Place::whereId($place_id)->first();
    $parking = Parking::find($place->parking_id)->first();


	$pdf = PDF::loadView('pdf', compact('reservation','place','parking','montant','date'));
	return $pdf->stream('mon-pdf.pdf');
});

Route::get('perserver', function (Request $request) {
    $id = $request->input('place_id');
   return view('personnel.reserver',compact('id'));
});


Route::get('/pay', function () {
    return view('Clients.payEtape1');
});

Route::get('/annuler', function (Request $request) {

    $code = $request->input('code');
    $motif = $request->input('motif');


    $reservation = Reservation::where('code',$code)->first();
    $place = Place::whereId($reservation->place_id)->first();
    $parking = Parking::whereId($place->parking_id)->first();
    $personnel = User::where('parking_id',$parking->id)->first();

    Mail::to($personnel)->send(new SendNewAnnulMail($reservation, $motif, $personnel));
    return view('clients.demande');
});

Route::get('demande', function () {
    return view('clients.demande');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('user',UserController::class);

Route::resource('administrateur',ParkingController::class);

Route::resource('place',PlaceController::class);

Route::resource('reservation',ReservationController::class);

Route::resource('persoreserver',FatigueController::class);
