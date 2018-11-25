@extends('layout')
@section('formularios')
    <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Imagenes o videos</h2>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">
          @for($i = 0; $i<10; $i++)
          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/1.jpg" class="portfolio-popup">
                <img src="img/portfolio/{{$i+1}}.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Imagen {{ $i+1 }}</h2></div>
                </div>
              </a>
            </div>
          </div>
          @endfor

        </div>

      </div>
    </section>
@endsection
