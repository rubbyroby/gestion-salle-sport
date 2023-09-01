<?php

namespace App\Http\Controllers;

use App\Models\joueurs;
use App\Http\Requests\StorejoueursRequest;
use App\Http\Requests\UpdatejoueursRequest;

class JoueursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $joueurs=joueurs::all();
        return view('joueurs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $joueurs=joueurs::all();
        return view ('joueurs.create',compact('joueurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorejoueursRequest $request)
    {
        $validated=$request->validate([
            'id'=>'required',
            'nom'=>'required',
            'prenom'=>'required',
            'date_de_naissance'=>'required',
            'taill'=>'required',
            'poids'=>'required',
            'id_sport'=>'required',
            'id_equipe'=>'required',
 
        ]); 

        $data=[];
        $data['id']=$request->id;
        $data['nom']=$request->nom;
        $data['prenom']=$request->nom;
        $data['date_de_naissance']=$request->nom;     
        $data['taill']=$request->nom;
        $data['poids']=$request->nom;
        $data['id_sport']=$request->nom;
        $data['id_equipe']=$request->nom;
        joueurs::insert($data);
        return redirect()->route('joueurs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(joueurs $joueurs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(joueurs $joueurs)
    {
        $joueurs=joueurs::all();
        return view('joueurs.edit',compact('joueurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatejoueursRequest $request, joueurs $joueurs)
    {
        $joueurs->id=$request->id;
        $joueurs->nom=$request->nom;
        $joueurs->prenom=$request->prenom;
        $joueurs->date_de_naissance=$request->date_de_naissance;
        $joueurs->taill=$request->taill;
        $joueurs->poids=$request->poids;
        $joueurs->id_sport=$request->id_sport;
        $joueurs->id_equipe=$request->id_equipe;
        $joueurs->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(joueurs $joueurs)
    {
        $joueurs->delete();
        return redirect()->route('joueurs.index');
    }
}
