<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactosController extends Controller
{
  public function index()
  {
    $titulo2="Contactos Biowell";
    return view('contactos.index', compact('titulo2'));
  }
}
