@extends('layout')
@section('formularios')
 <section id="eventos" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          
            <h1 style="text-align:center"><strong>{{$titulo2}}</strong></h1>
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
