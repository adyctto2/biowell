@extends('layout')
@section('formularios')
<h1 style="text-align:center"><strong>Servicios y Productos</strong></h1>
<div class="row menu">
    <div class="col-md-3 menu-opcion">
        <a href="{{route('productos')}}"> <div class=" entre-linea {{ Request::is('oferta/productos') ? 'activar' : '' }}"><strong> Productos </strong></div></a>
        @foreach ($datos as $dat)
            <a href="{{ route('productosshow',['id' =>  $dat->id])}}"><div   class="{{ Request::is('oferta/productos/'.$dat->id) ? 'activar' : '' }}">{{ $dat->nombre }}</div></a>
        @endforeach
        <a href="{{route('servicios')}}"> <div class=" entre-linea {{ Request::is('oferta/servicios') ? 'activar' : '' }}"><strong> Servicios </strong></div></a>
        @foreach ($datos2 as $dat2)
            <a  href="{{ route('serviciosshow',['id' =>  $dat2->id])}}"><div  class="{{ Request::is('oferta/servicios/'.$dat2->id) ? 'activar' : '' }}">{{ $dat2->nombre }}</div></a>
        @endforeach
        <hr>
    </div>
    <div class="col-md-9 menu-contenido">
        @yield('productos-contenido')
    </div>
</div>
@endsection
