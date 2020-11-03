<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Carga de archivos css -->
        <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link href="{{ url('/assets/icofont.min.css') }}" rel="stylesheet">
        <link href="{{ url('/assets/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ url('/assets/venobox/venobox.min.css') }}" rel="stylesheet">
        <link href="{{ url('/assets/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ url('/assets/main.css') }}" rel="stylesheet">
        <link href="{{ url('/assets/boxicons/css/boxicons.min.css') }}" rel="stylesheet">

        <title>Hotel La Rivera</title>

    </head>
    <body class="antialiased">
    @include('navegation')

    <!-- ======= Hero  ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
        <h1> @yield('content')</h1>
    </div>
    </section>

    <main id="main">
        <!-- ======= Información ======= -->
        @yield('inf')
    </main>
    @include('footer')
        <!-- Carga de archivos javascript -->
        <script src="{{ url('/assets/jquery/jquery.min.js') }}"></script>
        <script src="{{ url('/assets/jquery.easing/jquery.easing.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('/assets/owl.carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ url('/assets/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ url('/assets/venobox/venobox.min.js') }}"></script>
        <script src="{{ url('/assets/aos/aos.js') }}"></script>
        <script src="{{ url('/assets/main.js') }}"></script>
    </body>
</html>
