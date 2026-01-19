<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::all();
        return view('foods.index', compact('foods'));
    }

    public function create()
    {
        return view('foods.create');
    }

    public function store(Request $request)
    {
        Food::create($request->all());
        return redirect()->route('foods.index');
    }

    public function show(string $id)
    {
        $food = Food::find($id);
        return view('foods.show', compact('food'));
    }

    public function edit(string $id)
    {
        $food = Food::find($id);
        return view('foods.edit', compact('food'));
    }

    public function update(Request $request, string $id)
    {
        $food = Food::find($id);
        $food->update($request->all());
        return redirect()->route('foods.index');
    }

    public function destroy(string $id)
    {
        $food = Food::find($id);
        $food->delete();
        return redirect()->route('foods.index');
    }
}