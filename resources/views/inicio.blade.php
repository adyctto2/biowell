<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bio-Well Bolivia</title>
    <link href="{{ asset('img/index.ico') }}" rel="icon">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  </head>
  <body>
    <div class ="superior">
      <div class="container">
        <div class="contacto">
          <a href="#"><i class="far fa-envelope"></i>biowell@biowellbolivia.com</a>
          <a href="#"><i class="fas fa-phone"></i>62-24565</a>
        </div>
        <div class="social">
          <a href="#" ><i class="fab fa-facebook-f" style="color:#3a5998;"></i></a>
          <a href="#"><i class="fab fa-twitter" style="color:#0084FF"></i></a>
          <a href="#"><i class="fab fa-youtube" style="color:#cc181e"></i></a>
          <a href="#" ><i class="fab fa-instagram" style="color:#cd486b"></i></a>
        </div>
      </div>
    </div>
    <div class="separacion"></div>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
      <div class="container">
        <a class="logo" href="#">
          <img src="{{asset('img/logo.png')}}" width="70"  class="align-left" alt="">Bio-Well Bolivia
        </a>
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <div class="navbar-nav ml-auto menu">
            <a class="nav-item " href="#">Home</a>
            <a class="nav-item " href="#">Features</a>
            <a class="nav-item " href="#">Pricing</a>
            <a class="nav-item " href="#">Disabled</a>
          </div>
        </div>
      </div>
    </nav>
    <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/intro-carousel/2.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/intro-carousel/1.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/intro-carousel/3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
    <script type="text/javascript" src=" {{ asset('js/jquery.min.js') }} "></script>
    <script type="text/javascript" src=" {{ asset('js/bootstrap.js') }} "></script>
  </body>
</html>
