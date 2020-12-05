<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    //
    public function showClientes(){
        $clientes = DB::table('cliente')->get();
        //->select('nombre','dni', 'telefono')
        
        return view('clientes.clientes',['clientes' => $clientes]);
    }
}
