<?php

namespace App\Http\Controllers;

use App\Models\apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apprenants = apprenant::all();
        return view('apprenants.index', compact('apprenants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apprenants.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $apprenant = new apprenant();
        $apprenant->nom = $request->nom;
        $apprenant->prenom = $request->prenom;
        $apprenant->adresse = $request->adresse;
        $apprenant->telephone = $request->telephone;
        $apprenant->save();
        return redirect()->route('apprenants.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(apprenant $apprenant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(apprenant $apprenant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, apprenant $apprenant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(apprenant $apprenant)
    {
        //
    }
}
