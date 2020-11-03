 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a class="navbar-brand" href="{{url('/')}}"><img src="" alt="" class="img-fluid"><span style="font-size:15pt">&#9820;</span>HOTEL LA RIVERA</a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li class="drop-down nav-item">
            <a class="nav-link" href="#">
                <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                Hotel
            </a>
            <ul>
                <li class="drop-down"><a class="nav-link">Sobre nosotros</a>
                    <ul>
                    <li><a href="{{url('/hotel/historia')}}">Historia</a></li>
                    <li><a href="{{url('/hotel/mision-vision')}}">Misión y Visión</a></li>
                    </ul>
                </li>
                <li><a href="{{url('/hotel/equipo')}}">Equipo</a></li>
                <li><a href="{{url('/hotel/ubicacion')}}">Ubicación</a></li>
            </ul>
        </li>
            
        </li>
        <li class="drop-down nav-item" >
            <a class="nav-link" href="#">
                <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                Servicios
            </a>
          <ul>
            <li class="nav-item {{  Request::is('servicios/habitaciones') ? 'active' : ''}}">
                    <a class="nav-link" href="{{url('/servicios/habitaciones')}}">
                        <span>&#10010</span> Habitaciones
                    </a>
                </li>
                <li class="nav-item"><a href="{{url('/servicios/eventos/¿?')}}"><span>&#10010</span>
                Eventos</a></li>
            </ul>
        </li>
        <li class="nav-item {{  Request::is('reservas') ? 'active' : ''}}">
            <a class="nav-link" href="{{url('/reservas')}}">
                Reservas
            </a>
        </li>
        <li><a href="{{url('/contacto')}}">Contacto</a></li>
          <!--@if( true || Auth::check() )
            <li class="nav-item">
                <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                    <a class="nav-link" >
                        <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                        Cerrar sesión
                    </a> 
                    </button>
                </form>
            </li>
        @endif-->
        </ul>
      </nav>
    </div>
  </header>
