<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;
use App\Models\Customer;
use App\Models\Food;

class MealController extends Controller
{
    public function index()
    {
        $meals = Meal::all();
        return view('meals.index', compact('meals'));
    }

    public function create()
    {
        $customers = Customer::all();
        $foods = Food::all();
        return view('meals.create', compact('customers', 'foods'));
    }

    public function store(Request $request)
    {
        Meal::create($request->all());
        return redirect()->route('meals.index');
    }

    public function show(string $id)
    {
        $meal = Meal::find($id);
        return view('meals.show', compact('meal'));
    }

    public function edit(string $id)
    {
        $meal = Meal::find($id);
        $customers = Customer::all();
        $foods = Food::all();
        return view('meals.edit', compact('meal', 'customers', 'foods'));
    }

    public function update(Request $request, string $id)
    {
        $meal = Meal::find($id);
        $meal->update($request->all());
        return redirect()->route('meals.index');
    }

    public function destroy(string $id)
    {
        $meal = Meal::find($id);
        $meal->delete();
        return redirect()->route('meals.index');
    }
}
