@extends('master')
@section('content')
    Clientes
@stop

@section('inf')
<section id="portfolio" class="portfolio section-bg">
<div class="container">

    <div class="section-title" data-aos="fade-up">
        <br><h2>Listado de Huspedes</h2>
    </div>

    <div class="row " data-aos="fade-up">
        @foreach($clientes as $p)
        <div class="col-md-3">
            <div class="card" style="width: 15rem;">
                <img src='{{url("/imag/clientes/$p->foto")}}' class="card-img-top" alt="{{ $p->foto }}">
                <div class="card-body">
                    <h5 class="card-title"> {{ $p->nombre }} </h5>
                    <p class="card-text"> DNI :  {{ $p->dni }} </p>
                    <p class="card-text"> Genero :  {{ $p->genero }} </p>
                    <p class="card-text"> Telefono :  {{ $p->telefono }} </p>
                    <p class="card-text"> Direccion :  {{ $p->domicilio }} </p>
                </div>
            </div>
        </div>
        @endforeach
  </div>


</div>

    <!-- div class="container">

      <div class="row portfolio-container" data-aos="fade-up">
      @foreach($clientes as $p)
      <div class="col-lg-4 col-md-6 portfolio-item">
              <div class="portfolio-wrap">
               <img src="{{ url( 'img/clientes/') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4> {{ $p->nombre }} </h4>
                  <p>{{ $p->dni}}</p>
                  <p class="card-text"> DNI :  {{ $p->dni }} </p>
                    <p class="card-text"> Genero :  {{ $p->genero }} </p>
                    <p class="card-text"> Telefono :  {{ $p->telefono }} </p>
                    <p class="card-text"> Direccion :  {{ $p->domicilio }} </p>
                  <div class="portfolio-links">
                    <a href="{{ url( 'img/clientes/' )}}" data-gall="portfolioGallery" class="venobox"><i class="bx bx-plus"></i>Imagen</a>
                  </div>
                </div>
                
              </div>
            </div>

        @endforeach
        </div>


    </div-->
  </section>
@stop