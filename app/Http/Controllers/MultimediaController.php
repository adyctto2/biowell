<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultimediaController extends Controller
{
  public function index()
  {
    $titulo2="Multimedia";
    return view('multimedia.index', compact('titulo2'));
  }
}
