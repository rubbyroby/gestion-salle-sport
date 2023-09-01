<?php

namespace App\Http\Controllers;

use App\Models\resultats;
use App\Http\Requests\StoreresultatsRequest;
use App\Http\Requests\UpdateresultatsRequest;

class ResultatsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resultats=resultats::all();
        return view('resultats.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $resultats=resultats::all();
        return view ('resultats.create',compact('resultats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreresultatsRequest $request)
    {
        $validated=$request->validate([
            'id'=>'required',
            'scor'=>'required',
 
        ]); 

        $data=[];
        $data['id']=$request->id;
        $data['scor']=$request->scor;     
        resultats::insert($data);
        return redirect()->route('resultats.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(resultats $resultats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(resultats $resultats)
    {
        $resultats=resultats::all();
        return view('resultats.edit',compact('resultat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateresultatsRequest $request, resultats $resultats)
    {
        $resultats->id=$request->id;
        $resultats->scor=$request->scor;
        $resultats->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(resultats $resultats)
    {
        $resultats->delete();
        return redirect()->route('resultats.index');
    }
}
