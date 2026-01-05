<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer; // 1. EKSİK BUYDU: Modeli içeri çağırdık.

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        
        return view('customers.index', compact('customers')); 
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        
        Customer::create([
            'name'      => $request->name,
            'surname'   => $request->surname,
            'gender'    => $request->gender,
            'birthyear' => $request->birthyear
        ]);
        
        return redirect()->route('customers.index');
    } 

    public function show(string $id)
    {
        
        $customer = Customer::find($id); 
        return view('customers.show', compact('customer'));
    }

    public function edit(string $id)
    {
        
        $customer = Customer::find($id);
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, string $id)
    {
        
        $customer = Customer::find($id);
        
        
        $customer->update([
            'name'      => $request->name,
            'surname'   => $request->surname,
            'gender'    => $request->gender,
            'birthyear' => $request->birthyear
        ]);

        return redirect()->route('customers.index');
    }

    public function destroy(string $id)
    {
        
        $customer = Customer::find($id);
        $customer->delete();
        
        return redirect()->route('customers.index');
    }
}