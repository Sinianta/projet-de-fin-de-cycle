<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Reservation;
use App\Models\place;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $places = Place::all();
        $date1 = Carbon::createFromFormat('Y-m-d', request('date_entrer'));
        $date2 = Carbon::createFromFormat('Y-m-d', request('date_sortie'));

        if ($date1->greaterThan($date2)) {
            $erreur = "La première doit être plus prôche d'aujourd'hui que le second par rapport au future";

        } elseif ($date1->equalTo($date2)) {
        // date1 est égale à date2
        } else {
        // date1 est inférieure à date2
        }

        return view('personnel.listPlace',compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
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


        $request->validate([
            'date_arrive' => 'required',
            'date_depart' => 'required',
            'date_res' => 'required',
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

        return view('clients.payEtape1',compact('montant','reservation'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Reservation $reservation)
    {
        $reservation->etat= 'Achevé';
        $reservation->updateOrFail();

        $place = Place::whereId($reservation->place_id)->first();
        $place->disponibilite = 'Libre';
        $place->updateOrFail();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->deleteOrFail();
        return redirect()->route('place.index');
    }

}
