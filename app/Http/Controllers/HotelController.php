<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    //
    public function historia(){
        return view('hotel.historia');
    }

    public function misionVision(){
        return view('hotel.mision-vision');
    }

    public function ubicacion(){
        return view('hotel.ubicacion');
    }

    public function equipo(){
        return view('hotel.equipo');
    }
}
