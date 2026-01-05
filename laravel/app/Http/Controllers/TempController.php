php<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  // Fixed: removed "/TempController"

class TempController extends Controller
{
    public function index()
    {
        return view('example');  // Fixed: added semicolon
    }
}