<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Place;
use App\Models\User;
use App\Models\Parking;
use App\Models\Reservation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendNewAnnulMail;
use App\Mail\SendNewFactureMail;

class FatigueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // $valider = $request->validate([
        //     'motif' => 'required|string',
        // ]);
        $code = $request->input('code');
        // $motif = $valider(['motif']);


        $reservation = Reservation::where('code',$code)->first();
        $place = Place::whereId($reservation->place_id)->first();
        $parking = Parking::whereId($place->parking_id)->first();
        $personnel = User::where('parking_id',$parking->id)->first();
        $nom = $personnel->name;
        Mail::to($personnel)->send(new SendNewAnnulMail($reservation, $personnel));

        return back()->with('nom',$nom);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $aujourdhui = now();
        $heure1 = Carbon::createFromFormat('H:i', $request->date_arrive);
        $heure2 = Carbon::createFromFormat('H:i', $request->date_depart);
        $dateSaisie = Carbon::createFromFormat('Y-m-d', $request->date_res);
        if ($dateSaisie->isSameDay($aujourdhui) && $heure1->lt($aujourdhui)) {
            return back()->with('error', 'Si vous souhaitez reserver aujourd\'hui, l\'heure d\'arrivé doit être superieur à celle actuelle.');
        }
        if ($heure2 < $heure1) {
             return back()->with('error', 'Les heures sont mal saisie.');
         }

        $id = $request->input('place_id');
        $place = Place::whereId($id)->first();
        $numero = $place->numero;
        $place->fill([
            'disponibilite' => 'Occupé',
        ]);
        $place->updateOrFail();

        // if ($end_date < $start_date) {
        //     return back()->with('error', 'La date de fin doit être supérieure à la date de début');
        // }

        $request->validate([
            'date_depart' => 'required|date',
            'date_arrive' => 'required',
            'date_depart' => 'required',
            'prenom' => 'required|string',
            'nom' => 'required|string',
            'email' => 'required|string|email|max:255',
            'telphone' => 'required|string|min:13',
            'nin' => 'required|string',
            'plaque' => 'required|string',
            'marque' => 'required|string',
            'place_id' => 'required',
            'parking_id' => 'required',
        ], [
            'required' => 'Le champ :attribute est obligatoire.',
            'string' => 'Le champ :attribute doit être une chaîne de caractères.',
            'email' => 'Le champ :attribute doit être une adresse e-mail valide.',
            'unique' => 'L\'adresse e-mail saisie est déjà utilisée.',
            'min' => 'Le champ :attribute doit comporter au moins :min caractères.',
            'after_or_equal:today' => 'La date saisie ne doit pas être inférieur à celle d\'aujourd\'hui',
        ]);

        $reservation = new Reservation($request->all());
        $reservation->code = Str::random(10);
        $reservation->etat = 'En cour';
        $reservation->place_numero = $numero;
        $reservation->saveOrFail();


        $difference = $heure2->diffInHours($heure1);
        if ($difference>5) {
            return back()->with('error', 'On ne peut pas reserver plus de 5 heure.');
        }
        $montant = 500 * $difference;

        return back()->with('success', 'La reservation coûtera : '.$montant);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Place $place)
    {
        $place->deleteOrFail();
        return redirect()->route('place.index');
    }
}
