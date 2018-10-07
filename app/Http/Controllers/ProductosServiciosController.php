<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosServiciosController extends Controller
{
  public function index()
  {
    $titulo="Lista de productos";
    return view('servicios.index', compact('titulo'));
  }
  public function ver()
  {
    $titulo="Descripcion del Producto";
    return view('servicios.ver', compact('titulo'));
  }
}
