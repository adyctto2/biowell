<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiowellController extends Controller
{
    public function index()
    {
      $titulo2 = "Bienvenido a BioWell";
      return view('biowell.index', compact('titulo2'));
    }
    public function index2()
    {
      $titulo2="Bienvenido a BioWell Bolivia";
      return view('biowell.index2', compact('titulo2'));
    }
    public function indexQueEs(){
      $titulo2="¿Que es Bio-Well (GDV)?";
      return view('biowell.quees', compact('titulo2'));
    }
    public function indexHistoria(){
      $titulo2="La historia de GDV";
      return view('biowell.historia', compact('titulo2'));
    }
    public function indexSalud(){
      $titulo2="Salud";
      return view('biowell.salud', compact('titulo2'));
    }
    public function indexDeporte(){
      $titulo2="Deporte";
      return view('biowell.deporte', compact('titulo2'));
    }
    public function indexEstres(){
      $titulo2="Estrés";
      return view('biowell.estres', compact('titulo2'));
    }
    public function indexAmbiente(){
      $titulo2="Ambiente";
      return view('biowell.ambiente', compact('titulo2'));
    }
}
