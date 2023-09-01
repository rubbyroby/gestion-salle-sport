<?php

namespace App\Http\Controllers;

use App\Models\matchs;
use App\Http\Requests\StorematchsRequest;
use App\Http\Requests\UpdatematchsRequest;

class MatchsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matchs=matchs::all();
        return view('matchs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $matchs=matchs::all();
        return view ('matchs.create',compact('matchs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorematchsRequest $request)
    {
        $validated=$request->validate([
            'id'=>'required',
            'tetulaire'=>'required',
            'horaire'=>'required',
            'id_equipe'=>'required',
            'id_resultat'=>'required',
            'id_classement'=>'required',
 
        ]); 

        $data=[];
        $data['id']=$request->id;
        $data['titulaire']=$request->titulaire;  
        $data['horaire']=$request->titulaire;  
        $data['id_equipe']=$request->titulaire;  
        $data['id_resultat']=$request->titulaire;  
        $data['id_classement']=$request->titulaire;     
        matchs::insert($data);
        return redirect()->route('matchs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(matchs $matchs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(matchs $matchs)
    {
        $matchs=matchs::all();
        return view('matchs.edit',compact('matchs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatematchsRequest $request, matchs $matchs)
    {
        $matchs->id=$request->id;
        $matchs->titulaire=$request->titulaire;
        $matchs->horaire=$request->horaire;
        $matchs->id_equipe=$request->id_equipe;
        $matchs->id_resultat=$request->id_resultat;
        $matchs->id_classement=$request->id_classement;

        $matchs->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(matchs $matchs)
    {
        $matchs->delete();
        return redirect()->route('matchs.index');
    }
}
