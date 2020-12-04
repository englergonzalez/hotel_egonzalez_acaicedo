<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    //
    
    public function showEventos($id){
        return view('servicios.eventos', array('id' => $id,
                                            'nombre'=> 'Carnavales del fuego',
                                            'fecha' =>'15 Nov. 2023'));
    }

    public function showServicios()
    {
        $servicios = [
            'Servicio a la habitación',
            'Desayuno',
            'Almuerzo',
            'Cena',
            'Parqueadero',
            'Llamadas internacionales',
            'Wi-Fi',
            'Mini Bar',
            'Restaurante',
            'Sauna',
            'Piscina',
            'Spa',
            'Jacuzzi',
            'Eventos',
            'Habitaciones'
        ];
        return view('servicios.servicios', ['servicios'=>$servicios]);
    }
}
