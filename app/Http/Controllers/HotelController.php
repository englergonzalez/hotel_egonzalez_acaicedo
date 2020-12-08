<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    //
    public function getIndex(){
        return view('home');
    }

    public function showHistoria(){
        return view('hotel.historia');
    }

    public function showMisionVision(){
        return view('hotel.mision-vision');
    }

    public function showUbicacion(){
        return view('hotel.ubicacion');
    }

    public function showEquipo(){
        return view('hotel.equipo');
    }
    public function showContactos(){
        return view('contacto');
    }
    public function showConsultas(){
        //a)	Obtener el número de habitación, tipo y precio de las habitaciones que estén ocupadas en la actualidad (no tienen fecha de salida). 
        $consulta1 = DB::table('habitacion')
                    ->join('precio', 'precio_id', '=', 'precio.id')
                    ->join('factura', 'habitacion.numero', '=', 'factura.numero')
                    ->whereDate('entrada', '2020-12-04')
                    ->get();

        //b)	Obtener el nombre del cliente o clientes que más veces hayan estado en el hotel (no número total de noches, sino estancias diferentes:
        //      una persona que ha estado tres veces diferentes de una noche en el hotel habrá́́ "estado" más veces que otra persona que ha estado una vez durante tres noches). 
        $consulta2 = DB::table('cliente')
                    ->join('factura', 'id', '=', 'cliente')
                    ->select(DB::raw('nombre, count(nombre) as cant'))
                    ->groupby('nombre')->orderby('cant','desc')
                    ->get();

        //c)	Obtener el listado de los clientes que ocupen o hayan ocupado alguna vez habitaciones de los dos tipos (individual y doble) 
        $consulta3 = DB::table('cliente')
                    ->join('factura', 'factura.cliente', '=', 'cliente.id')
                    ->join('habitacion', 'habitacion.numero', '=', 'factura.numero')
                    ->join('precio', 'precio_id', '=', 'precio.id')
                    ->select('nombre','tipo')
                    ->where('tipo', '=', 'Sencilla' )
                    ->orwhere('tipo', '=', 'Doble')
                    ->get();

        //d)	Obtener la cantidad de habitaciones por tipo que cuenta el hotel.
        $consulta4 = DB::table('habitacion')
                    ->join('precio', 'precio_id', '=', 'precio.id')
                    ->select(DB::raw('count(tipo) as cant, tipo'))
                    ->groupby('tipo')
                    ->get();

        return view('hotel.consultas',['consulta1'=>$consulta1,'consulta2'=>$consulta2,'consulta3'=>$consulta3,'consulta4'=>$consulta4] );
    }
}
