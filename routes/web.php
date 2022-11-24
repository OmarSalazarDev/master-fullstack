<?php

namespace App\Http\Controllers;

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

// RUTAS DE PRUEBA
Route::get('/', function () {
    return '<h1>Hola mundo con Laravel</h1>';
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/pruebas/{nombre?}', function ($nombre = null) {

    $texto = '<h2>Texto desde una ruta</h2>';
    $texto .= 'Nombre: '.$nombre;

    return view('/pruebas', array(
        'texto' =>  $texto
    ));
});


Route::get('/animales', [PruebasController::class, 'index']);
Route::get('/test-orm', [PruebasController::class, 'testOrm']);
