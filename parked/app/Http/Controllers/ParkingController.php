<?php

namespace App\Http\Controllers;

use App\Models\Parking;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ParkingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parking = Parking::all();
        return view('admin.listParking',compact('parking'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addParking');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'etiquette'=>'required|unique:parkings,etiquette',
            'nbrPlace'=>'required',
            'adresse'=>'required',
            'description'=>'required'

        ]);

        $parking = new Parking($request->all());
        // identifier l'id d'un utilisateur dans phpMyAdmin et l'associer à l'utilisateur
        $parking->saveOrFail();

        // $admin= User::where('priorite','2')->get();
        // Mail::to($admin)->send(new adminEmail($demandes));
        return redirect()->route('administrateur.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Parking $parking): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Parking $parking): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Parking $parking): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parking $parking)
    {
        $parking->deleteOrFail();
        return redirect()->route('administrateur.index');
    }
}
