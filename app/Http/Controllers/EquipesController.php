<?php

namespace App\Http\Controllers;

use App\Models\equipes;
use App\Http\Requests\StoreequipesRequest;
use App\Http\Requests\UpdateequipesRequest;

class EquipesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sports=equipes::all();
        return view('equipes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equipes=equipes::all();
        return view ('equipes.create',compact('equipes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreequipesRequest $request)
    {
        $validated=$request->validate([
            'id'=>'required',
            'titulaire'=>'required',
            'nombre'=>'required',
            'date_de_creation'=>'required',
 
        ]); 

        $data=[];
        $data['id']=$request->id;
        $data['titulaire']=$request->titulaire; 
        $data['nombre']=$request->nombre;     
        $data['date_de_creation']=$request->date_de_creation; 
        equipes::insert($data);
        return redirect()->route('equipes.index');
    }

    public function stats($id)
{
    $team = equipes::findOrFail($id);
    $matches = $team->matches;

    $wins = 0;
    $losses = 0;
    $draws = 0;

    foreach ($matches as $match) {
        if ($match->home_team_id == $team->id && $match->home_team_score > $match->away_team_score) {
            $wins++;
        } elseif ($match->away_team_id == $team->id && $match->away_team_score > $match->home_team_score) {
            $wins++;
        } elseif ($match->home_team_score == $match->away_team_score) {
            $draws++;
        } else {
            $losses++;
        }
    }

    $stats = [
        'wins' => $wins,
        'losses' => $losses,
        'draws' => $draws,
    ];

    return view('teams.stats', compact('team', 'stats'));
}

    /**
     * Display the specified resource.
     */
    public function show(equipes $equipes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(equipes $equipes)
    {
        $equipes=equipes::all();
        return view('equipes.edit',compact('equipes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateequipesRequest $request, equipes $equipes)
    {
        $equipes->id=$request->id;
        $equipes->titulaire=$request->titulaire;
        $equipes->nombre=$request->nombre;
        $equipes->date_de_creation=$request->date_de_creation;
        $equipes->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(equipes $equipes)
    {
        $equipes->delete();
        return redirect()->route('equipes.index');
    }
}
