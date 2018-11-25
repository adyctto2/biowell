@extends('layout')
@section('formularios')
<div class="row">
    <div class="col-md-8">
        <div class="row">
            <div class="col-1 col-md-1 col-sm-1 fecha_evento">
                <ul>
                    <li><strong>{{ \Carbon\Carbon::parse($evento->fecha_curso)->format('d') }}</strong></li>
                    <li><strong>{{ $meses[\Carbon\Carbon::parse($evento->fecha_curso)->format('m')-1]}}</strong></li>
                </ul>
            </div>
            <div class="col-11 col-md-11 col-sm-11 titulo_evento">
                <h4><strong>{{$evento->nombre}}</strong></h4>
            </div>
        </div>
        <img src="{{ asset('img/evento/'.$evento->imagen )}}" alt="" class="img-responsive img-thumbnail">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Descripción</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Información</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" style="padding: 10px;" id="home" role="tabpanel" aria-labelledby="home-tab">{{ $evento->descripcion}}</div>
                <div class="tab-pane fade" style="padding: 10px;" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> Direccion: <strong>{{ $evento->direccion}}</strong></p>
                    @if( $evento->costo == '0.00')
                        <p><i class="fa fa-money" aria-hidden="true"></i> Costo: <strong>Gratis</strong></p>
                    @else
                        <p><i class="fa fa-money" aria-hidden="true"></i> Costo: <strong>{{ $evento->costo }} $us.</strong></p>
                    @endif
                    <p><i class="fa fa-calendar" aria-hidden="true"></i> Fecha limite de Inscripcion: <strong>{{ \Carbon\Carbon::parse($evento->fecha_inscripcion)->format('d') }} de {{ $meses[\Carbon\Carbon::parse($evento->fecha_inscripcion)->format('m')-1]}}</strong></p>
                </div>
              </div>
    </div>
    <div class="col-md-4" style="background: rgb(233, 233, 233); padding-top: 20px; box-shadow: 2px 2px 5px #999;">
        @if($dt > $evento->fecha_inscripcion)
            <div class="p-3 mb-2 bg-danger text-white">Inscripción culminada</div>
        @else
        <form>
            <h4 style="text-align: center"><strong>RESGISTRATE YA</strong></h4>
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombres">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail2" aria-describedby="apellidoHelp" placeholder="Apellidos">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail3" aria-describedby="apellidoHelp" placeholder="Correo Electronico">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="exampleInputEmail4" aria-describedby="apellidoHelp" placeholder="Numero telefonico">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="exampleInputEmail5" aria-describedby="apellidoHelp" placeholder="Documento de identidad">
            </div>
            <button type="submit" class="btn btn-primary btn-block">REGISTRARSE</button>
        </form>
        @endif
    </div>
</div>
<hr>
<section id="eventos" class="wow fadeInUp">
    <div class="container">
        <div class="section-header">
        
            <h3 style="text-align:center"><strong>Todos los eventos</strong></h3>
        </div>
        <div class="owl-carousel testimonials-carousel">
        @foreach($eventos as $ev)
            <div class="testimonial-item">
                <img class="card-img-top" src="{{ asset('img/evento/'.$ev->imagen)}}" alt="Card image cap">
                <div class="fecha">
                    <p> <span><i class="fa fa-calendar-plus-o"></i></span> {{ \Carbon\Carbon::parse($ev->fecha_curso)->format('d') }} de {{ $meses[\Carbon\Carbon::parse($ev->fecha_curso)->format('m')-1]}}</p>
                </div>
                
                <div class="card-body">
                <h5 class="card-title"><strong>{{ $ev->nombre}} </strong></h5>
                <p class="card-text contenido">{{ $ev->descripcion}}</p>
                <div class="row">
                    <div class="col-lg-6">
                    <a href="{{ route('eventosShow',['id' =>  $ev->id])}}" class="btn btn-primary">Mas información</a> 
                    </div>
                </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>
@endsection
