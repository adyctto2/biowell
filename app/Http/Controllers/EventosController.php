<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventosController extends Controller
{
  public function index()
  {
    $titulo="Eventos Biowell";
    return view('eventos.index', compact('titulo'));
  }
  public function show()
  {
    $titulo=" Lista Eventos Biowell";
    return view('eventos.lista', compact('titulo'));
  }
}
