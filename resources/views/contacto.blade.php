@extends('master')
@section('content')
    Contacto
@stop

@section('inf')
<!-- ======= Contacto ======= -->
<section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Comunicate con nosotros</h2>
          <p>En menos de 24 Horas nos pondremos en contacto contigo.</p>
        </div>
        
        <div class="row mt-5 justify-content-center info php-email-form" data-aos="fade-up">
          <div class="col-lg-10">

              
            
          <form action="" method="" role="form" class="">
            <div class="form-row">
                <div class="email mt-4 col-6 form-group">
                  <i class="icofont-envelope"></i>
                  <h4>Correo Electronico:</h4>
                  <p>escribe@hotellarivera.com</p>
                </div>

                <div class="phone mt-4 col-6 form-group">
                  <i class="icofont-phone"></i>
                  <h4>Llamadas/WhatsApp:</h4>
                  <p>+57 312 233 4141</p>
                </div>

                <div class="col-md-4 form-group">
                  <input type="text" name="nom" class="form-control" id="nom" placeholder="Nombre" data-rule="minlen:4" data-msg="Por favor, introduzca al menos 4 caracteres" />
                  <div class="validate"></div>
                </div>

                <div class="col-md-4 form-group">
                  <input type="email" class="form-control" name="email" placeholder="Correo eletrocnico" data-rule="email" data-msg="Por favor, introduzca un correo electrónico válido" />
                  <div class="validate"></div>
                </div>

                <div class="col-md-4 form-group">
                    <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Asunto" data-rule="" data-msg="Por favor, introduzca al menos 8 caracteres" />
                    <div class="validate"></div>
                </div>

            </div>

                <div class="form-group">
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="5" data-rule="required" data-msg="Por favor, escriba su mensaje" placeholder="Mensaje"></textarea>
                    <div class="validate"></div>
                </div>
              
              <div class="mb-3">
                <div class="loading">Cargando...</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje ha sido enviado. ¡Gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
          </form>
        </div>
      </div>
    </section>
@stop