<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HabitacionesController extends Controller
{
    //
    public function showHabitaciones(){
        $titulo = "Servicios de habitaciones";
        $servicios = DB::table('habitacion')
                    ->join('precio', 'precio_id', '=', 'precio.id')
                    ->get();
        return view('servicios.habitaciones',['titulo'=>$titulo,'servicios' => $servicios] );
        /*
        $servicios = [
            'Servicio a la habitación',
            'Llamadas internacionales',
            'Wi-Fi',
            'Mini Bar',
            'Jacuzzi'
        ];
            Opcion 1
        return view('servicios.habitaciones', 
        [
            'titulo'=>$titulo,
            'servicios'=>$servicios
        ]);
            Opcion 2 
        return view('servicios.habitaciones') 
        ->with('titulo',$titulo),
        ->with('servicios',$servicios); 
        */
    }
}
