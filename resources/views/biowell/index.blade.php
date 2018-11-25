@extends('layout')
@section('formularios')
<h1 style="text-align:center"><strong>Bienvenido a BioWell</strong></h1>
<div class="row menu">
    <div class="col-md-3 menu-opcion">
        <a  href="{{route('ques')}}"><div class="{{ Request::is('biowell/AcercaDe') ? 'activar' : '' }}">Que es Bio-Well</div></a>
        <a href="{{ route('historia')}}"><div class="{{ Request::is('biowell/historia') ? 'activar' : '' }}">Historia GDV</div></a>
        <div class="entre-linea"><strong> ¿Donde se aplica? </strong></div>
        <a href="{{ route('salud')}}"><div class="{{ Request::is('biowell/salud') ? 'activar' : '' }}">Salud</div></a>
        <a href="{{ route('deporte')}}"><div class="{{ Request::is('biowell/deporte') ? 'activar' : '' }}">Deporte</div></a>
        <a href="{{ route('estres')}}"><div class="{{ Request::is('biowell/estres') ? 'activar' : '' }}">Estrés</div></a>
        <a href="{{ route('ambiente')}}"><div class="{{ Request::is('biowell/ambiente') ? 'activar' : '' }}">Ambiente</div></a>
        <hr>
    </div>
    <div class="col-md-9 menu-contenido">
        @yield('biowell-contenido')
    </div>
</div>
@endsection
