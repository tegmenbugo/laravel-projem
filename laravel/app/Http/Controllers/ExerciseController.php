<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercise; 

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exercises = Exercise::all(); 
        return view('exercises.index', compact('exercises')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('exercises.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Exercise::create($request->all()); 
        
        return redirect()->route('exercises.index'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $exercise = Exercise::find($id); 
        return view('exercises.show', compact('exercise'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $exercise = Exercise::find($id); 
        return view('exercises.edit', compact('exercise')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $exercise = Exercise::find($id); 
        $exercise->update($request->all()); 
        
        return redirect()->route('exercises.index'); 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $exercise = Exercise::find($id); 
        $exercise->delete(); 
        
        return redirect()->route('exercises.index'); 
    }
}
}
