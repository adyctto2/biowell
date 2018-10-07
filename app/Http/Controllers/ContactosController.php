<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactosController extends Controller
{
  public function index()
  {
    $titulo="Contactos Biowell";
    return view('contactos.index', compact('titulo'));
  }
}
