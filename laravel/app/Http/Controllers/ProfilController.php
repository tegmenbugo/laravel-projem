<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
  public function goster()
  {
    $isim = " Buğra";
    return view('profil',['ad' => $isim]);
  }  
}
