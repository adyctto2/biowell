@extends('layout')
@section('formularios')
   <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Nuestra información</h2>
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

  <div class="section-header">
        <h2>Contactanos</h2>
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

@endsection
