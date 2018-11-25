
@extends('servicios.index')

@section('productos-contenido')

    <div class="row">
        @foreach ($datos as $dat)
            <div class="col-sm-4"><a href="{{ route('productosshow',['id' =>  $dat->id])}}"> 
                <div class="producto_contenedor">
                    <img src="{{asset('img/producto/'.$dat->imagen)}}" class="img-responsive img-thumbnail" alt="">
                    <div class="nombre_producto">
                            {{ $dat->nombre }}
                    </div>
                </div>  </a>
            </div>
            
        @endforeach

    </div>
    
@endsection