<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Servicios;
class ProductosServiciosController extends Controller
{
  public function index()
  {
    $datos = Productos::all('id','nombre');
    $datos2 = Servicios::all('id','nombre');
    $titulo2="ofertas";
    return view('servicios.index', compact('datos', 'datos2','titulo2'));
  }
  public function indexproductos()
  {
    
    $datos = Productos::all('id','nombre','imagen');
    $datos2 = Servicios::all('id','nombre','imagen');
    $titulo2="Productos";
    return view('servicios.verProductos', compact('datos', 'datos2','titulo2'));
  }
  public function indexServicios()
  {
    
    $datos = Productos::all('id','nombre','imagen');
    $datos2 = Servicios::all('id','nombre','imagen');
    $titulo2="Servicios";
    return view('servicios.verServicios', compact('datos', 'datos2','titulo2'));
  }
  public function ver()
  {
    return view('servicios.ver', compact('titulo2'));
  }
  public function showproductos($id)
  {
    $titulo2="Producto";

    $datos = Productos::all('id','nombre');
    $datos2 = Servicios::all('id','nombre');
    $grupos = Productos::where('id','=',$id)->get()->first();
    // dd($grupos);
    // return $grupos;
    return view('servicios.detalleProducto', compact('grupos','datos', 'datos2','titulo2'));
  }
  
  public function showservicios($id)
  {
    $titulo2="Servicios";

    $datos = Productos::all('id','nombre');
    $datos2 = Servicios::all('id','nombre');
    $grupos = Servicios::where('id','=',$id)->get()->first();
    // dd($grupos);
    return view('servicios.detalleServicio', compact('grupos','datos', 'datos2','titulo2'));
  }
}
