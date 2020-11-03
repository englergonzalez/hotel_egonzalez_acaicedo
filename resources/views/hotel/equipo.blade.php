@extends('master')
@section('content')
    Equipo
@stop

@section('inf')
       <!-- ======= Equipo ======= -->
       <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
        <h2>Est. Ingeniería de Sistemas</h2>
          <p>Somos dos estudiantes de Ingeniería de Sistemas, de la Universidad de Nariño, cada uno con amplio conocimiento en su area, para ofrecer calidad en cada uno de nuestros servicios.
            Visitanos, contamos con todos los implementos de bioseguridad por la Organización Mundial de la Salud (OMS), enterate por ti mismo, será um gusto atenderte.</p>
        </div>

        <div class="row">

          <div class="  col-md-6" data-aos="fade-up"  data-aos-delay="100">
            <div class="member">
              <img src="{{url('/img/team/engler.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Engler Gonzalez</h4>
                  <span> CEO, Est. Ing. de Sistemas</span>
                </div>
                <div class="social">
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=" col-md-6" data-aos="fade-up">
            <div class="member">
              <img src="{{ url('/img/team/caicedo.png') }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Alvaro Caiceo</h4>
                  <span>Est. Ing. de Sistemas</span>
                </div>
                <div class="social">
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
@stop