<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreguntasFrecuentesController extends Controller
{
  public function index()
  {
    $titulo2="Preguntas Frecuentes";
    return view('preguntasfrecuentes.index', compact('titulo2'));
  }
}
