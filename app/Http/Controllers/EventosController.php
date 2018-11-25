<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;
use DateTime;
class EventosController extends Controller
{
  public function index()
  {
    $eventos = Evento::all();
    $titulo2="Eventos Biowell";
    $meses = array('ENE', 'FEB', 'MAR', 'ABR', 'MAY', 'JUN', 'JUL', 'AGO', 'SEP', 'OCT', 'NOV', 'DIC');
    return view('eventos.index', compact('titulo2', 'eventos', 'meses'));
  }
  public function show($id)
  {
    $titulo2="Eventos Biowell";
    $eventos = Evento::all();
    $dta = new DateTime();
    $dt=$dta->format('Y-m-d');
    $meses = array('ENE', 'FEB', 'MAR', 'ABR', 'MAY', 'JUN', 'JUL', 'AGO', 'SEP', 'OCT', 'NOV', 'DIC');
    $evento = Evento::where('id','=',$id)->get()->first(); 
    return view('eventos.lista', compact('titulo2', 'evento', 'eventos', 'dt', 'meses'));
  }
}
