@extends('master')
@section('content')
    Consultas
@stop

@section('inf')
<section id=consultas>

    <div class="container">
        
        <!--Consulta #1-->
        <div class="section-title" data-aos="fade-up">
            <h2>Número habitación, tipo y precio de las habitaciones que estén ocupadas en la actualidad</h2>        
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#Habitacion</th>
                <th scope="col">Tipo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($consulta1 as $p)
                <tr>
                <td>{{ $p->numero }}</td>
                <td>{{ $p->tipo }}</td>
                <td>{{ $p->descripcion }}</td>
                <td>{{ $p->precio }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
         <!--Consulta #2-->
         <div class="section-title" data-aos="fade-up">
            <h2>Nombre del cliente o clientes que más veces hayan estado en el hotel</h2>        
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">Cliente</th>
                <th scope="col">#Veces</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($consulta2 as $p)
                <tr>
                <td>{{ $p->nombre }}</td>
                <td>{{ $p->cant }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
         <!--Consulta #3-->
         <div class="section-title" data-aos="fade-up">
            <h2>Clientes que ocupen o hayan ocupado alguna vez habitaciones de los dos tipos (individual y doble)</h2> 
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">Cliente</th>
                <th scope="col">Tipo de habitación</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($consulta3 as $p)
                <tr>
                <td>{{ $p->nombre }}</td>
                <td>{{ $p->tipo }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
         <!--Consulta #4-->
         <div class="section-title" data-aos="fade-up">
            <h2>Cantidad de habitaciones por tipo que cuenta el hotel.</h2> 
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">Tipo de habitación</th>
                <th scope="col">Cantidad</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($consulta4 as $p)
                <tr>
                <td>{{ $p->tipo }}</td>
                <td>{{ $p->cant }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <br><br><br><br><br><br><br>
    <div>
</section>
@stop