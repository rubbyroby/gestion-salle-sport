<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joueurs;

class joueurController extends Controller
{
    public function rechercher(Request $request)
{
    $nom = $request->input('nom');
    $prenom = $request->input('prenom');
    $sport = $request->input('sport');

    $joueurs = Joueurs::query();

    if (!empty($nom)) {
        $joueurs->where('nom', 'like', "%$nom%");
    }

    if (!empty($prenom)) {
        $joueurs->where('prenom', 'like', "%$prenom%");
    }

    if (!empty($sport)) {
        $joueurs->whereHas('sport', function ($query) use ($sport) {
            $query->where('nom', 'like', "%$sport%");
        });
    }

    $joueurs = $joueurs->get();

    return view('joueurs.index', compact('joueurs'));
}

public function index(Request $request, $tri = 'nom')
{
    $joueurs = Joueurs::query();

    switch ($tri) {
        case 'nom':
            $joueurs->orderBy('nom');
            break;
        case 'prenom':
            $joueurs->orderBy('prenom');
            break;
        case 'sport':
            $joueurs->orderBy('sport_id');
            break;
        default:
            $joueurs->orderBy('nom');
            break;
    }

    $joueurs = $joueurs->get();

    return view('joueurs.index', compact('joueurs', 'tri'));
}

    /**
     * Display a listing of the resource.
     */
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
