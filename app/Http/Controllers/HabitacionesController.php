<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HabitacionesController extends Controller
{
    //
    public function showHabitaciones(){
        $servicios = [
            'Servicio a la habitación',
            'Llamadas internacionales',
            'Wi-Fi',
            'Mini Bar',
            'Jacuzzi'
        ];
        $titulo = "Servicios de habitaciones";
        //Opcion 1
        return view('servicios.habitaciones', 
        [
            'titulo'=>$titulo,
            'servicios'=>$servicios
        ]);
        /* Opcion 2 
        return view('servicios.habitaciones') 
        ->with('titulo',$titulo),
        ->with('servicios',$servicios); 
        */
    }
}
