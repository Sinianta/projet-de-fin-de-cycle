<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Parking;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendNewUserMail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personnel = User::all();
        return view('admin.listPersonnel',compact('personnel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addPersonnel');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation du formulaire
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'parking_id'=>'required'

        ]);


        $personnel = new User($request->all());
        $passe= Str::random(8);
        $personnel->password = Hash::make($passe);
        $personnel->saveOrFail();

        Mail::to($personnel)->send(new SendNewUserMail($personnel, $passe));

        return back()->with('passe', $passe);

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->deleteOrFail();
        return back();
    }
}
