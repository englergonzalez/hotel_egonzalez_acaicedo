<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    //
    public function habitaciones(){
        return view('servicios.habitaciones');
    }
    public function eventos($id){
        return view('servicios.eventos', array('id' => $id,
    'nombre' => 'Carnavales del fuego',
        'fecha' =>'15 Nov. 2023'));
    }
}
