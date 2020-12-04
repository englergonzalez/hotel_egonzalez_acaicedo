<?php

namespace App\Http\Controllers;

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
}