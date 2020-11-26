<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ContactoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
|
*/
//*****Ruta HOME */
Route::get('/', [HomeController::class, 'index']);

//*****Rutas HOTEL */
Route::get('hotel/historia',[HotelController::class, 'historia']);
Route::get('hotel/mision-vision', [HotelController::class, 'misionVision']);
Route::get('hotel/ubicacion', [HotelController::class, 'ubicacion']);
Route::get('hotel/equipo',  [HotelController::class, 'equipo']);

//*****Rutas SERVICIOS */
Route::get('servicios/habitaciones', function () {
    return view('servicios.habitaciones');
});
Route::get('servicios/eventos/{id}',[ServiciosController::class,'eventos']);

//*****Ruta RESERVAS */
Route::get('reservas',[ContactoController::class, 'reserva']);

//*****Ruta CONTACTO */
Route::get('contacto', [ContactoController::class, 'contacto']);