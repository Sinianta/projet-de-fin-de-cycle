<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Reservation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth::user()->parking_id;
        $places = Place::where('parking_id',$id)->get();
        return view('personnel.index',compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personnel.addPlace');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'numero'=>'required|unique:places,numero',
            'parking_id'=>'required',


        ]);

        $place = new Place($request->all());
        // identifier l'id d'un utilisateur dans phpMyAdmin et l'associer à l'utilisateur
        $place->saveOrFail();

        // $admin= User::where('priorite','2')->get();
        // Mail::to($admin)->send(new adminEmail($demandes));
        return redirect()->route('place.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Place $place): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Place $place)
    {
        return view('personnel.placeEdite',compact('place'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Place $place)
    {
            $id = $place->id;
            $place->fill([
                'disponibilite' => 'Libre',
            ]);
            $place->update();

            $reservation = Reservation::where('place_id',$id)->where('etat','En cour')->first();
            $reservation->etat = 'Achevé';
            $reservation->updateOrFail();
            return back();

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
