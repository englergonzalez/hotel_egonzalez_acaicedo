<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//*****Ruta HOME */
Route::get('/', function () {
    return view('home');
});

//*****Rutas HOTEL */
Route::get('hotel/historia', function () {
    return view('hotel.historia');
});
Route::get('hotel/mision-vision', function () {
    return view('hotel.mision-vision');
});
Route::get('hotel/ubicacion', function () {
    return view('hotel.ubicacion');
});
Route::get('hotel/equipo', function () {
    return view('hotel.equipo');
});

//*****Rutas SERVICIOS */
Route::get('servicios/habitaciones', function () {
    return view('servicios.habitaciones');
});
Route::get('servicios/eventos/{id}', function ($id) {
    return view('servicios.eventos', array('id' => $id));
});

//*****Ruta RESERVAS */
Route::get('reservas', function () {
    return view('reservas.reservas');
});

//*****Ruta CONTACTO */
Route::get('contacto', function () {
    return view('contacto');
});