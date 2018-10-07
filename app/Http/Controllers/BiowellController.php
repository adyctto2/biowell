<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiowellController extends Controller
{
    public function index()
    {
      $titulo="Bienvenido a BioWell";
      return view('biowell.index', compact('titulo'));
    }
    public function index2()
    {
      $titulo="Bienvenido a BioWell Bolivia";
      return view('biowell.index2', compact('titulo'));
    }
}
