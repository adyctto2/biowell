<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>{{ $titulo2}}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('img/index.ico') }}" rel="icon">

  <!-- Google Fonts -->
  <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700')}}" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->

</head>

<body id="body">
  <!-- modal de suscribcion-->

  <!-- <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Suscribete</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="">
            <div class="modal-body">
              <div >
                <p>¿Deseas estar al tanto de todas las novedades que ofrece Bio-Well Bolivia?</p>
              </div>
              <input type="email"  class="form-control" placeholder="Correo Electronico" id="email">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <input type="submit" class="btn btn-primary" id="guardar" value="Aceptar">
            </div>
          </form>
        </div>
      </div>
    </div> -->

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:biowell@example.com">biowell@example.com</a>
        <i class="fa fa-phone"></i> 74944332
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
        <a href="{{ route('principal')}}" class="scrollto"><img src="{{ asset('img/Logo.png')}}" width="50px" alt="Biowell Bolivia">
        Bio-Well Bolivia</a>
        <!-- Uncomment below if you prefer to use an image logo -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-has-children {{ Request::is('biowellBolivia') ? 'menu-active' : Request::is('biowell')? 'menu-active' : '' }}"><a>Acerca de</a>
            <ul>
              <li><a href="{{ route('ques')}}">Bio-Well</a></li>
              <li><a href="{{ route('biowellBolivia')}}">Nosotros</a></li>
            </ul>
          </li>
          <li class="{{ Request::is('oferta') ? 'menu-active' : '' }}"><a href="{{ route('oferta') }}">Servicios y Productos</a></li>
          <!-- <li class="{{ Request::is('eventos') ? 'menu-active' : '' }}"><a href="{{ route('eventos')}}">Eventos</a></li> -->
          <!-- <li><a href="#testimonials">Testimonios</a>
            <ul><li><a href="#clients">Clientes</a></li></ul>
          </li> -->
          <!-- <li class="{{ Request::is('multimedia') ? 'menu-active' : '' }}"><a href="{{ route('multimedia')}}">Multimedia</a></li> -->
          <li class="{{ Request::is('preguntas-frecuentes') ? 'menu-active' : '' }}"><a href="{{ route('pf')}}">Preguntas Frecuentes</a></li>
          
          <li class="{{ Request::is('contactos') ? 'menu-active' : '' }}"><a href="{{route('contactos')}}">Contactos</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
  <main>
    <div class="container contenido-biowell">
      @yield('formularios')
    </div>
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
  <script src="{{ asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{ asset('lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{ asset('lib/superfish/superfish.min.js')}}"></script>
  <script src="{{ asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('lib/magnific-popup/magnific-popup.min.js')}}"></script>
  <script src="{{ asset('lib/sticky/sticky.js')}}"></script>

  <script>
      $(document).ready(function(){
        $('#exampleModalCenter1').modal('show');
      });
    </script>
  <!-- Uncomment below if you want to use dynamic Google Maps -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script> -->

  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main.js')}}"></script>

  </body>
</html>
