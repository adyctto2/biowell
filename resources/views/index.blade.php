<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BioWell Bolivia</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/index.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

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
    </div>

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
        <a href="#body" class="scrollto"><img src="img/logo.png" width="50px" alt="Biowell Bolivia">
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
            </ul>
          </li>
          <li><a href="#services">Servicios y Productos</a></li>
          <li><a href="#eventos">Eventos</a></li>
          <li><a href="#testimonials">Testimonios</a>
            <ul><a href="#clients">Clientes</a></ul>
          </li>
          <li><a href="#contact">Contactos</a></li>
          <li class="menu-has-children"><a ><i class="fa fa-plus" aria-hidden="true"></i></a>
            <ul>
              <li><a href="#">Multimedia</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h1>Bio-Well Bolivia</h1>
      <p>Poner un eslogan o un texto</p>
      <div>
        <a href="#about" class="btn-get-started scrollto">Saber mas</a>
        <a href="#portfolio" class="btn-projects scrollto">Servicios</a>
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
            <img src="img/about-img.jpg" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>Que es Bio-Well</h2>
            <h3>Bio-Well es un sistema revolucionario, no invasivo para medir el campo de energía humano a través de una cámara especializada y un sistema de software. Cada análisis devuelve una gran cantidad de información significativa para ofrecerle una visión verdaderamente integral de su bienestar.</h3>
            <h3>Bio-Well es el primer dispositivo de medición científica del campo energético de personas, objetos, lugares, etc. que permite medir, analizar, visualizar y corregir los campos energéticos.</h3>

            <a href="#" class="btn-projects scrollto">Ver completo</a>

          </div>
        </div>

      </div>
    </section><!-- #about -->
    <section id="aboutBioWell" class="wow fadeInUp">
      <div class="container">
        <div class="row">


          <div class="col-lg-6 content">
            <h2>Quienes somos Bio-Well Bolivia</h2>
            <h3>descripcion de la empresa y algunas cosas mas que el cliente desee poner</h3>

            <a href="#" class="btn-projects scrollto">Ver completo</a>

          </div>
          <div class="col-lg-6 about-img">
            <img src="img/about-img.jpg" alt="">
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
          <h2>Servicios y Productos</h2>
          <p>Pequeña descripcion de los servicios y productos que ofrece biowell - posteriormente muestra lo mas relevante, solo algunos ejemplos segun la pagina de biowell argentina</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><img src="img/about-img.jpg" alt="" class="img-thumbnail"></div>
              <h4 class="title"><a href="">Medición Completa del campo </a></h4>
              <p class="description">Descripcion del producto o servicio</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><img src="img/about-img.jpg" alt="" class="img-thumbnail"></div>
              <h4 class="title"><a href="">Medición del estrés </a></h4>
              <p class="description">Descripcion del producto o servicio</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><img src="img/producto/p1.png" alt="" class="img-thumbnail"></div>
              <h4 class="title"><a href="">Bio-well 2.0  </a></h4>
              <p class="description">Descripcion del producto o servicio</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <h4 class="title"><a href="">Todos los productos</a></h4>
              <div class="col-lg-12">
                <a href="" class="btn btn-success  btn-block">Ingresar</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->



<!--==========================
      eventos Section
    ============================-->
    <section id="eventos" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Eventos y Noticias</h2>
          <p>Descripcion de la seccion</p>
        </div>
        <div class="owl-carousel testimonials-carousel">

            <div class="testimonial-item">
                <img class="card-img-top" src="img/noticias/noticia1.jpg" alt="Card image cap">

                <div class="card-body">
                  <h5 class="card-title"><strong>Noticias o Evento </strong></h5>
                  <p class="card-text contenido">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <div class="row">
                    <div class="col-lg-9 fecha">
                        <p> <span><i class="fa fa-calendar-plus-o"></i></span> 12 diciembre 2018</p>
                    </div>
                    <div class="col-lg-3">                  
                      <a href="#" class="btn btn-primary">Ver</a>
                    </div>
                  </div>
                </div>
            </div>

            <div class="testimonial-item">
                <img class="card-img-top" src="img/noticias/noticia1.jpg" alt="Card image cap">

                <div class="card-body">
                  <h5 class="card-title"><strong>Noticias o Evento </strong></h5>
                  <p class="card-text contenido">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <div class="row">
                    <div class="col-lg-9 fecha">
                        <p> <span><i class="fa fa-calendar-plus-o"></i></span> 12 diciembre 2018</p>
                    </div>
                    <div class="col-lg-3">                  
                      <a href="#" class="btn btn-primary">Ver</a>
                    </div>
                  </div>
                </div>
            </div>

            <div class="testimonial-item">
                <img class="card-img-top" src="img/noticias/noticia1.jpg" alt="Card image cap">

                <div class="card-body">
                  <h5 class="card-title"><strong>Noticias o Evento </strong></h5>
                  <p class="card-text contenido">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <div class="row">
                    <div class="col-lg-9 fecha">
                        <p> <span><i class="fa fa-calendar-plus-o"></i></span> 12 diciembre 2018</p>
                    </div>
                    <div class="col-lg-3">                  
                      <a href="#" class="btn btn-primary">Ver</a>
                    </div>
                  </div>
                </div>
            </div>

            <div class="testimonial-item">
                <img class="card-img-top" src="img/noticias/noticia1.jpg" alt="Card image cap">

                <div class="card-body">
                  <h5 class="card-title"><strong>Noticias o Evento </strong></h5>
                  <p class="card-text contenido">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <div class="row">
                    <div class="col-lg-9 fecha">
                        <p> <span><i class="fa fa-calendar-plus-o"></i></span> 12 diciembre 2018</p>
                    </div>
                    <div class="col-lg-3">                  
                      <a href="#" class="btn btn-primary">Ver</a>
                    </div>
                  </div>
                </div>
            </div>

            <div class="testimonial-item">
                <img class="card-img-top" src="img/noticias/noticia1.jpg" alt="Card image cap">

                <div class="card-body">
                  <h5 class="card-title"><strong>Noticias o Evento </strong></h5>
                  <p class="card-text contenido">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <div class="row">
                    <div class="col-lg-9 fecha">
                        <p> <span><i class="fa fa-calendar-plus-o"></i></span> 12 diciembre 2018</p>
                    </div>
                    <div class="col-lg-3">                  
                      <a href="#" class="btn btn-primary">Ver</a>
                    </div>
                  </div>
                </div>
            </div>

            <div class="testimonial-item">
                <img class="card-img-top" src="img/noticias/noticia1.jpg" alt="Card image cap">

                <div class="card-body">
                  <h5 class="card-title"><strong>Noticias o Evento </strong></h5>
                  <p class="card-text contenido">DEscripcion de la seccion </p>
                  <div class="row">
                    <div class="col-lg-9 fecha">
                        <p> <span><i class="fa fa-calendar-plus-o"></i></span> 12 diciembre 2018</p>
                    </div>
                    <div class="col-lg-3">                  
                      <a href="#" class="btn btn-primary">Ver</a>
                    </div>
                  </div>
                </div>
            </div>

        </div>

      </div>
    </section><!-- #testimonials -->




   

    <!--==========================
      Our Portfolio Section
    ============================-->
    <!-- <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Portfolio</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/1.jpg" class="portfolio-popup">
                <img src="img/portfolio/1.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 1</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/2.jpg" class="portfolio-popup">
                <img src="img/portfolio/2.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 2</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/3.jpg" class="portfolio-popup">
                <img src="img/portfolio/3.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 3</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/4.jpg" class="portfolio-popup">
                <img src="img/portfolio/4.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 4</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/5.jpg" class="portfolio-popup">
                <img src="img/portfolio/5.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 5</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/6.jpg" class="portfolio-popup">
                <img src="img/portfolio/6.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 6</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/7.jpg" class="portfolio-popup">
                <img src="img/portfolio/7.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 7</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/8.jpg" class="portfolio-popup">
                <img src="img/portfolio/8.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 8</h2></div>
                </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- #portfolio -->

    <!--==========================
      Testimonials Section
    ============================-->
    <section id="testimonials" class="wow fadeInUp">
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
              <h3>Saul Goodman</h3>
              <h4>Ocupacion 1</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Ocupacion 1</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Ocupacion 1</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Ocupacion 1</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Ocupacion 1</h4>
            </div>

        </div>

      </div>
    </section><!-- #testimonials -->


 <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
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
      </section><!-- #clients -->

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
          <p>descripcion de contactos</p>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15035.817365845083!2d-65.74977187729495!3d-19.586456693351934!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f94e7a742dc163%3A0xf0943a56bebdf962!2sCasa+Nacional+de+la+Moneda!5e0!3m2!1ses!2sbo!4v1538677444749" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
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
            <div class="text-center"><button type="submit">Send Message</button></div>
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
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>, 
        Desarrollado e implementado por <a href="">IS&T</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>
  
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

</body>
</html>
