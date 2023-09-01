<?php

namespace App\Http\Controllers;

use App\Models\sports;
use App\Http\Requests\StoresportsRequest;
use App\Http\Requests\UpdatesportsRequest;

class SportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sports=sports::all();
        return view('sports.index',compact('sports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sports=sports::all();
        return view ('sports.create',compact('sports'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoresportsRequest $request)
    {
        $validated=$request->validate([
            'id'=>'required',
            'tetulaire'=>'required',
 
        ]);

        $data=[];
        $data['id']=$request->id;
        $data['titulaire']=$request->titulaire;     
        sports::insert($data);
        return redirect()->route('sports.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(sports $sports)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sports $sports)
    {
        $sports=sports::all();
        return view('sports.edit',compact('sports'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesportsRequest $request, sports $sports)
    {
        $sports->id=$request->id;
        $sports->titulaire=$request->titulaire;
        $sports->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sports $sports)
    {
        $sports->delete();
        return redirect()->route('sports.index');
    }
}
