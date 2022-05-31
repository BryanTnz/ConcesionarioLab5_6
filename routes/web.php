<?php

use App\Http\Controllers\ModeloController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PersonalizaController;
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


// PASO 1
// ROUTE PARA PRESENTAR UNA VISTA UTILIZANDO EL MÉTODO GET
Route::get('/', function () {
    return View('welcome');
});

// ROUTE PARA PRESENTAR UN TEXTO UTILIZANDO EL MÉTODO GET
Route::get('demo1', function () {
    return 'Hola Laravel';
});

// ROUTE PARA PRESENTAR UN JSON UTILIZANDO EL MÉTODO GET
Route::get('demo2', function () {
    return '{
    "Nombre":"Byron",
    "Apellido":"Loarte",
    "Ciudad":"Quito"
    }';
});



// PASO 2
// PROBLEMA DE LAS RUTAS SIN EL MÉTODO NAME
//  - Cuando se cambia el nombre de la ruta, el nombre de los links tambien debe cambiar
      // Route::get('service',function()   ------    <a href="service">servicios</a>
// Para resolver el problema se aplica el metodo NAME

// Problema
Route::get('service',function(){
    return'
                
        <a href="service">servicios</a>
        <br>
        <a href="service">servicios</a>
        <br>
        <a href="service">servicios</a>
        <br>
        <a href="service">servicios</a>
    ';
});


// Dando un nombre
Route::get('service',function(){
    return'
                
        <a href="service">servicios</a>
        <br>
        <a href="service">servicios</a>
        <br>
        <a href="service">servicios</a>
        <br>
        <a href="service">servicios</a>
    ';
})->name('prueba');



// PASO 3
// ROUTE PARA PRESENTAR UNA VISTA UTILIZANDO EL MÉTODO VIEW Y EL MÉTODO NAME
Route::get('/', function () {
    return View('home');
})->name('home');




// PASO 4
// ROUTE PARA MANDAR DATOS A LA VISTA
Route::get('modelos',ModeloController::class)->name('modelos');


// Rutas normales
Route::get('personal',PersonalController::class)->name('personal');


Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');



Route::get('/home', function () {
    return view('home');
})->name('home');

/*
Route::get('/modelos', function () {
    return view('modelos');
})->name('modelos');
*/

// Rutas con parametros
Route::get('contactos/{name?}',[ContactoController::class,'dataContact'])->name('contactos');



// PASO 6
// REDIRECCIONAR RUTAS UTILIANDO EL MÉTODO ROUTE
Route::view('novedades','novedades')->name('novedades');


Route::get('productos',function(){
    return redirect()->route('home'); // SIEMPRE PARA RUTAS DE TIPO VIEW
})->name('productos');


Route::resource('autos',AutoController::class);

Route::get('personaliza',PersonalizaController::class)->name('personaliza');