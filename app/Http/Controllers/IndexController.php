<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Servicios;
use App\Evento;
class IndexController extends Controller
{
  public function show()
  {
    $meses = array('ENE', 'FEB', 'MAR', 'ABR', 'MAY', 'JUN', 'JUL', 'AGO', 'SEP', 'OCT', 'NOV', 'DIC');
    $datos = Productos::all()->first();
    $datos2 = Servicios::all()->first();
    $eventos = Evento::all();
    return view('index',compact('datos', 'datos2', 'eventos','meses'));
  }
}
