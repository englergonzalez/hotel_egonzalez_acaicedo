@extends('master')
@section('content')
    Misión y Visión
@stop

@section('inf')
<section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-6 col-lg-7" data-aos="fade-right">
            <img src="{{ url('/img/hero3.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">

            <h3 data-aos="fade-up">En nuestro Hotel Resort.</h3>
            <p data-aos="fade-up">
            Creemos que cada uno de nosotros necesita un sentido de dignidad, orgullo y satisfacción en lo que hacemos.
            </p>
            <div class="icon-box" data-aos="fade-up">
              <i class="bx bx-receipt"></i>
              <h4>Misión</h4>
              <p>Ofrecer un servicio de calidad y confort, bebido a que satisfacer a nuestros huéspedes depende del esfuerzo conjunto de muchos, 
              somos más efectivos cuando trabajamos juntos de manera cooperativa, respetando las contribuciones y la importancia de los demás..</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-cube-alt"></i>
              <h4>Visión</h4>
              <p>Para el 2024 lograr los estándares de calidad requeridos en la prestación de servicios y productos a nuestros huéspedes y comensales,
               a través de un proceso de mejora continua obteniendo una generación de beneficios a través del mercado local y foráneo, en el que nuestro 
               nombre llegue a ser uno de los primeros en nuestra región.</p>
            </div>

          </div>
        </div>

      </div>
    </section>
@stop