<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BioWell Bolivia</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('img/index.ico')}}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ asset('lib/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
  <link href="{{ asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css')}}">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->

</head>

<body id="body">
  <!-- modal de suscribcion-->

  <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Suscribete</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form v-on:submit.prevent="registrar" method="post">
              {{csrf_field()}}
            <div class="modal-body">
              <div >
                <p>¿Deseas estar al tanto de todas las novedades que ofrece Bio-Well Bolivia?</p>
              </div>
              <input type="email"  class="form-control" placeholder="Correo Electronico" id="email" v-model="emails" required>
              <div style="text-align: center">
                <span class="text-danger" >@{{ mensaje }}</span>
              </div>
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-primary" id="guardar" value="Aceptar" name="aceptar">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:info@biowellbolivia.com">info@biowellbolivia.com</a>
        <i class="fa fa-phone"></i> +591 72031454
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#body" class="scrollto"><img src="{{asset('img/Logo.png')}}" width="50px" alt="Biowell Bolivia">
        Bio-Well Bolivia</a>
        <!-- Uncomment below if you prefer to use an image logo -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Inicio</a></li>
          <li class="menu-has-children"><a>Acerca de</a>
            <ul>
              <li><a href="#about">Bio-Well</a></li>
              <li><a href="#aboutBioWell">Nosotros</a></li>
              <li><a href="#testimonio">Testimonios</a></li>
              <li><a href="#korotkov">Dr. Konstantin G. Korotkov</a></li>
            </ul>
          </li>
          <li><a href="#services">Servicios y Productos</a></li>
          <!-- <li><a href="#eventos">Eventos</a></li> -->
          <!-- <li><a href="#testimonials">Testimonios</a>
            <ul><li><a href="#clients">Clientes</a></li></ul>
          </li> -->
          <!-- <li><a href="#portfolio">Multimedia</a></li> -->
          <li><a href="{{ route('pf')}}">Preguntas Frecuentes</a></li>
          <li><a href="#contact">Contactos</a></li>
          
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h1><strong>Bio-<span style="color: rgb(255, 102, 0)">Well</span> Bolivia</strong></h1>
      <p><strong> LA COMPANIA # 1 EN EL MUNDO DE GDV </strong></p>
      <h2>ESCANEAR TU LUZ INTERIOR</h2>
      <div>
        <a href="#about" class="btn-get-started scrollto">Saber mas</a>
        <a href="#services" class="btn-projects scrollto">Servicios</a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="{{ asset('img/producto/1.jpg')}}" alt="">
            <!-- <video width="100%" height="100%" controls>
              <source src="/video/video.mp4" typw="video/mp4">
            </video>                -->
          </div>

          <div class="col-lg-6 content">
            <h2>Que es Bio-Well</h2>
            <h3>Bio-Well es un sistema revolucionario, no invasivo para medir el campo de energía humano a través de una cámara especializada y un sistema de software. Cada análisis devuelve una gran cantidad de información significativa para ofrecerle una visión verdaderamente integral de su bienestar.</h3>

            <a href="{{ route('ques') }}" class="btn-projects scrollto">Ver completo</a>

          </div>
        </div>

      </div>
    </section><!-- #about -->
    <section id="aboutBioWell" class="wow fadeInUp">
      <div class="container">
        <div class="row">


          <div class="col-lg-6 content">
            <h2>Quienes somos Bio-Well Bolivia</h2>
            <h3></h3>

            <a href="{{ route('biowellBolivia')}}" class="btn-projects scrollto">Ver completo</a>

          </div>
          <div class="col-lg-6 about-img">
            <img src="{{ asset('img/producto/3.jpg')}}" alt="">
            <!-- <video width="100%" height="100%" controls >
              <source src="/video/video.mp4" typw="video/mp4">
            </video>      -->
          </div>
        </div>

      </div>
    </section>
    <!--==========================
      Services Section
    ============================-->

    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Con productos BIO-WELL se puede:</h2>
         <div class="row">
           <div class="col-md-4">
              <div class="card">
                  <video width="100%" class="card-img-top" height="100%" controls >
                      <source src="/video/video.mp4" typw="video/mp4">
                    </video>
                  <h5 class="card-title">Campo de energia</h5>
                  <div class="card-body">
                    <p class="card-text">Medir el campo de energía de una persona, que refleja el estado fisiológico, el estado de ánimo y las emociones y, en algunos casos, el estado espiritual.</p>
                  </div>
                </div>
           </div>
           <div class="col-md-4">
              <div class="card">
                  <video width="100%" class="card-img-top" height="100%" controls >
                      <source src="/video/video.mp4" typw="video/mp4">
                    </video><h5 class="card-title">Medición del estres</h5>
                  <div class="card-body">
                    <p class="card-text">Medir el nivel de estrés de la persona. De este indicador depende la dinámica de cambios en el estado en el futuro.</p>
                  </div>
                </div>
           </div>
           <div class="col-md-4">
              <div class="card">
                  <video width="100%" class="card-img-top" height="100%" controls >
                      <source src="/video/video.mp4" typw="video/mp4">
                    </video>
                    <h5 class="card-title">Medición del Chakra</h5>
                  <div class="card-body">
                    <p class="card-text">Mida los chakras y cree música meditativa individual para armonizar los flujos de energía, que afectan a todos los órganos del cuerpo humano.</p>
                  </div>
                </div>
           </div>
           
         </div><br>
         <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <video width="100%" class="card-img-top" height="100%" controls >
                        <source src="/video/video.mp4" typw="video/mp4">
                      </video>
                    <h5 class="card-title">Estado de Salud</h5>
                    <div class="card-body">
                      <p class="card-text">Evaluar el estado de salud y el potencial energético humano. El análisis se produce cuando se utilizan las características del brillo de los dedos.</p>
                    </div>
                  </div>
             </div>
             <div class="col-md-4">
                <div class="card">
                    <video width="100%" class="card-img-top" height="100%" controls >
                        <source src="/video/video.mp4" typw="video/mp4">
                      </video><h5 class="card-title">Escaneo de Energia</h5>
                    <div class="card-body">
                      <p class="card-text">Evaluar el balance energético del estado de las mitades derecha e izquierda. Esto es muy importante a la hora de elegir métodos para corregir el estado.</p>
                    </div>
                  </div>
             </div>
             <div class="col-md-4">
                <div class="card">
                    <video width="100%" class="card-img-top" height="100%" controls >
                        <source src="/video/video.mp4" typw="video/mp4">
                      </video>
                      <h5 class="card-title">Analisis Ambiental</h5>
                    <div class="card-body">
                      <p class="card-text">Análisis ambiental durante mucho tiempo con posterior procesamiento de datos.</p>
                    </div>
                  </div>
             </div>
         </div>

        </div>

        <div class="row" style="padding: 10px">
          <div class="col-lg-6 box wow fadeInLeft">
              <div><h3 style="text-align: center; "><strong>PRODUCTOS</strong> </h3></div>
              <a  class="enlace_productos" href="{{ route('productosshow',['id' =>  $datos->id])}}"> <div class=" row producto__contenido">
                <div class="col-sm-4" >
                  <img src="{{ asset('img/producto/'.$datos->imagen)}}" class="img-responsive img-thumbnail" alt="">
                </div>
                <div class="col-sm-8" >
                    <h4>{{ $datos->nombre }}</h4>
                    <p class="descripcion_p">{{ $datos->descripcion }}</p>
                </div>
              </div></a>
              <div style="align-content: center;">
                <a href="{{ route('productos')}}" class="btn btn-primary" style="font-size: 30px"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
              </div>
          </div>
          <div class="col-lg-6 box wow fc adeInLeft">
              <div><h3 style="text-align: center; "><strong>SERVICIOS</strong> </h3></div>
              <a  class="enlace_productos" href="{{ route('serviciosshow',['id' =>  $datos2->id])}}"> <div class=" row producto__contenido">
                <div class="col-sm-4" >
                  <img src="{{ asset('img/servicios/'.$datos2->imagen)}}" class="img-responsive img-thumbnail" alt="">
                </div>
                <div class="col-sm-8" >
                    <h4>{{ $datos2->nombre }}</h4>
                    <p class="descripcion_p">{{ $datos2->descripcion }}</p>
                </div>
              </div></a>
              <div style="align-content: center;">
                <a href="{{ route('servicios')}}" class="btn btn-primary" style="font-size: 30px"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
              </div>
          </div>
        </div>
      </div>
    </section><!-- #services -->


    <section id="testimonio" class="wow fadeInUp">
        <div class="container">
          <div class="section-header">
            <h2>Testimonios</h2>
          </div>
          <div class="row" >
            <div class="col-md-6" style="margin-top:20px;">
              <div class="contenido">

                <p>
                  <strong>«</strong>  <br> 
                  El dispositivo informático "GDV Bio-Well" utilizado en el estudio proporciona una estimación suficientemente precisa de los parámetros del estado psicofisiológico de los atletas. A través de la investigación de las imágenes de los dedos fluorescentes, que cambian dinámicamente con los estados emocionales y de salud, se pueden identificar áreas de congestión de la salud en todo el sistema. El dispositivo informático “GDV Bio-Well” permite un rápido monitoreo del proceso de adaptación a los atletas de alto nivel durante los períodos previos a la competencia y de competición y la implementación oportuna de las medidas correctivas necesarias.
                  <br><strong>»</strong>
                </p>
                <hr>
                <div class="row">
                  <div class="col-md-3">
                    <img src="{{ asset('img/testimonial-2.jpg')}}" alt="" width="100%" style="border-radius: 50% ">
                  </div>
                  <div class="col-md-9">
                    <h6><strong> Irina Gromova</strong></h6>
                    <p>Entrenador del Equipo Paralímpico de Esquí y Biatlón de Rusia</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6" style="margin-top:20px;">
                <div class="contenido">

                    <p>
                        <strong>«</strong>  <br> 
                        Este es un excelente instrumento, muy conveniente, fácil de usar e informativo. Lo estoy usando tanto en el instituto como en mis viajes y lo encuentro muy preciso y confiable. "
                        <br><strong>»</strong>
                    </p>
                    <hr>
                    <div class="row">
                      <div class="col-md-3">
                        <img src="{{ asset('img/testimonial-1.jpg')}}" alt="" width="100%" style="border-radius: 50% ">
                      </div>
                      <div class="col-md-9">
                        <h6><strong> P. Krishna Madappa</strong></h6>
                        <p>Presidente y co-fundador: Instituto para la ciencia, espiritualidad y sostenibilidad</p>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </section>


      <section id="korotkov" class="wow fadeInUp">
          <div class="container">
            <div class="section-header">
              <h2>Dr. Konstantin G. Korotkov</h2>
            </div>
            <div class="row" >
              <div class="col-md-4">
                <img src="{{ asset('img/dr.png')}}" width="100%" alt="">
              </div>
              <div class="col-md-8">
                <p>Konstantin Korotkov, PhD, profesor, es profesor de ciencias de la computación y biofísica en la Universidad de San Petersburgo de Tecnologías de la Información, Mecánica y Óptica en Rusia e investigador principal en el Instituto de Investigación de Actividad Física y Deporte de San Petersburgo. </p>
                
                <a href="#about" class="btn-get-started scrollto">Saber mas</a>
              </div>
            </div>
          </div>
        </section>
<!--==========================
      eventos Section
    ============================-->
    <!-- <section id="eventos" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Eventos</h2>
          <p>Descripcion de la seccion</p>
        </div>
        <div class="owl-carousel testimonials-carousel">
          @foreach($eventos as $ev)
            <div class="testimonial-item">
                <img class="card-img-top" src="{{ asset('img/evento/'.$ev->imagen)}}" alt="Card image cap">
                <div class="fecha">
                    <p> <span><i class="fa fa-calendar-plus-o"></i></span> {{ \Carbon\Carbon::parse($ev->fecha_curso)->format('d') }} de {{ $meses[\Carbon\Carbon::parse($ev->fecha_curso)->format('m')-1]}}</p>
                </div>
                
                <h5 class="card-title"><strong>{{ $ev->nombre}} </strong></h5>
                <div class="card-body">
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
    </section>#testimonials -->






    <!--==========================
      Our Portfolio Section
    ============================-->
    <!-- <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Imagenes o videos</h2>
          <p>Seccion donde se pondran imagenes o videos</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">
          @for($i = 0; $i<10; $i++)
          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/{{$i+1}}.jpg" class="portfolio-popup">
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
    </section> -->
    <!-- #portfolio -->

    <!--==========================
      Testimonials Section
    ============================-->
    <!-- <section id="testimonials" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Testimonios</h2>
          <p>descripcion de testimonios</p>
        </div>
        <div class="owl-carousel testimonials-carousel">

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
              <h3>Juan Perez</h3>
              <h4>Ocupacion 1</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
              <h3>Juan Perez</h3>
              <h4>Ocupacion 1</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
              <h3>Juan Perez</h3>
              <h4>Ocupacion 1</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
              <h3>Juan Perez</h3>
              <h4>Ocupacion 1</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
              <h3>Juan Perez</h3>
              <h4>Ocupacion 1</h4>
            </div>

        </div>

      </div>
    </section> -->


 <!--==========================
      Clients Section
    ============================-->
    <!-- <section id="clients" class="wow fadeInUp">
        <div class="container">
          <div class="section-header">
            <h2>Nuestros Clientes</h2>
            <p>Descripcion de clientes, abajo se muestra su logotipo</p>
          </div>

          <div class="owl-carousel clients-carousel">
            <img src="img/clients/client-1.png" alt="">
            <img src="img/clients/client-2.png" alt="">
            <img src="img/clients/client-3.png" alt="">
            <img src="img/clients/client-4.png" alt="">
            <img src="img/clients/client-5.png" alt="">
            <img src="img/clients/client-6.png" alt="">
            <img src="img/clients/client-7.png" alt="">
            <img src="img/clients/client-8.png" alt="">
          </div>

        </div>
      </section>#clients -->

    <!--==========================
      Call To Action Section
    ============================-->
    <!-- <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Call To Action</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section> -->
    <!-- #call-to-action -->

    <!--==========================
      Our Team Section
    ============================-->
    <!-- <section id="team" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Team</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-1.jpg" alt=""></div>
              <div class="details">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-2.jpg" alt=""></div>
              <div class="details">
                <h4>Sarah Jhinson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-3.jpg" alt=""></div>
              <div class="details">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-4.jpg" alt=""></div>
              <div class="details">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section> -->
    <!-- #team -->
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Contactanos</h2>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
                <a data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-ios-location-outline"></i></a>
              <h3>Dirección</h3>
              <address>Cale xxx, La Paz - Bolivia</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Telefono</h3>
              <p><a href="tel:+59177777777">+59177777777</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>
      </div>


<!-- Modal ubicacion -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Nuestra Ubicación</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.1650480522176!2d-68.0895599851357!3d-16.517763188605148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2104ef3d93a1%3A0x5d216d5df76ceded!2sCalle+13+44%2C+La+Paz!5e0!3m2!1ses!2sbo!4v1543120785076" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>




      <div class="container">
        <!-- Uncomment below if you wan to use dynamic maps -->
        <!--<div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>-->
      </div>

      <div class="container">
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre completo" data-rule="minlen:8" data-msg="Inserte un minimo de 8 caracteres" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electronico" data-rule="email" data-msg="Ingrese un correo valido" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Inserte un minimo de 8 caracteres" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Escriba su mensaje" placeholder="Mensaje"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit"  >Enviar Mensaje</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Bio-Well Bolivia</strong>. Todos los derechos Reservados
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('lib/magnific-popup/magnific-popup.min.js') }}"></script>
  <script src="{{ asset('lib/sticky/sticky.js') }}"></script>
  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js')}}"></script>
  <SCRipt src="{{ asset('js/app.js')}}"></SCRipt>
  <script>
      $(document).ready(function(){
        $('#exampleModalCenter1').modal('show');
      });
    </script>
  <!-- Uncomment below if you want to use dynamic Google Maps -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script> -->

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
    <script>
      
window.addEventListener('load', ()=>{
  var dat = document.querySelectorAll(".descripcion_p");
  var texto = dat[0].innerHTML.substr(0,150);
  dat[0].innerHTML = texto+" ...";
  var texto = dat[1].innerHTML.substr(0,150);
  dat[1].innerHTML = texto+" ...";
});
    </script>
</body>
</html>
