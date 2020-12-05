@extends('master')
@section('content')
    Habitaciones tipo Estándar,
    Superior, Ejecutiva, Suite
@stop

@section('inf')
<!-- ======= Habitaciones ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Tipos de habitaciones disponibles</h2>
        <p> {{$titulo}}: Incluye desayuno</p>
      </div>

      <div class="row portfolio-container" data-aos="fade-up">
      @foreach($servicios as $c)
      <div class="col-lg-4 col-md-6 portfolio-item">
              <div class="portfolio-wrap">
               <img src="{{ url( 'img/habitaciones/'.$c->foto) }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ $c->descripcion }}</h4>
                  <p> Camas: {{ $c->numCamas }}</p>
                  <p> Precio: {{ $c->precio }}</p>
                  <div class="portfolio-links">
                    <a href="{{ url( 'img/habitaciones/'.$c->foto ) }}" data-gall="portfolioGallery" class="venobox"><i class="bx bx-plus"></i>Imagen</a> 
                  </div>
                </div>
                
              </div>
            </div>

        @endforeach
        </div>


    </div>
  </section>

@stop