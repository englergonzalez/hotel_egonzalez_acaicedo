<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    //
    public function contacto(){
        return view('contacto');
    }
    public function reserva(){
        return view('reservas.reservas');
    }
}
