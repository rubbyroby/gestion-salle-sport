<?php

namespace App\Http\Controllers;

use App\Models\classements;
use App\Http\Requests\StoreclassementsRequest;
use App\Http\Requests\UpdateclassementsRequest;

class ClassementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classements = classements::orderBy('note', 'desc')->get();
        return view('classements.index', compact('classements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classements=classements::all();
        return view ('classements.create',compact('classements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreclassementsRequest $request)
    {
        $validated=$request->validate([
            'id'=>'required',
            'note'=>'required',
            
 
        ]); 

        $data=[];
        $data['id']=$request->id;
        $data['note']=$request->note;     
        classements::insert($data);
        return redirect()->route('classements.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(classements $classements)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(classements $classements)
    {
        $classements=classements::all();
        return view('classements.edit',compact('classements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateclassementsRequest $request, classements $classements)
    {
        $classements->id=$request->id;
        $classements->note=$request->note;
        $classements->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(classements $classements)
    {
        $classements->delete();
        return redirect()->route('classements.index');
    }
}
