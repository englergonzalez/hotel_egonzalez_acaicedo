<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HabitacionesController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\ServiciosController;


/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
*/
//*****Ruta HOME */
Route::get('/', [HotelController::class, 'getIndex']);

//*****Rutas HOTEL */
Route::get('hotel/historia',[HotelController::class, 'showHistoria']);
Route::get('hotel/mision-vision', [HotelController::class, 'showMisionVision']);
Route::get('hotel/ubicacion', [HotelController::class, 'showUbicacion']);
Route::get('hotel/equipo',  [HotelController::class, 'showEquipo']);

Route::get('servicios/habitaciones',[HabitacionesController::class,'showHabitaciones']);
/*****Rutas SERVICIOS
 * Route::get('servicios/habitaciones', function () {
    return view('servicios.habitaciones');
}); */
Route::get('servicios/servicios',[ServiciosController::class,'showServicios']);
Route::get('servicios/eventos/{id}',[ServiciosController::class,'showEventos']);

//*****Ruta CLIENTES */
Route::get('clientes/visualizar', [ClientesController::class, 'showClientes']);

//*****Ruta FACTURA */
Route::get('facturacion', [FacturacionController::class, 'getFactura']);

//*****Ruta RESERVAS */
Route::get('reservas',[ReservasController::class, 'getReservas']);

//*****Ruta CONTACTO */
Route::get('contactenos', [HotelController::class, 'showContactos']);