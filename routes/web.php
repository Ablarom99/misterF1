<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\EscuderiaController;
use \App\Http\Controllers\CircuitoController;
use \App\Http\Controllers\PilotoController;



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

Route::get('/', function () {
    return view('index');
})->name('home');

Auth::routes();

//  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// RUTAS PROTEGIDAS

// Route::get('crearescuderia', function () {
//     return view('pages/crearescuderia');
// })->name('crearescuderia')->middleware('auth');

Route::resource('crearescuderia', EscuderiaController::class)->middleware(['auth', 'verified']);
// Route::get('/crearescuderia', [EscuderiaController::class, 'index'])->name('crearescuderia')->middleware(['auth', 'verified']);

Route::get('/miescuderia', [EscuderiaController::class, 'loadmiescuderia'])->name('miescuderia')->middleware(['auth', 'verified']);

// Route::resource('miescuderia', EscuderiaController::class)->name('*', 'miescuderia')->middleware(['auth', 'verified']);

// RUTAS SIN PROTECCIÓN

Route::get('calendario', function () {
    return view('pages/calendario');
})->name('calendario');


// PILOTOS
Route::get('pilotos', function () {
    return view('pages/pilotos/index');
})->name('pilotos');
Route::get('pilotos2', function () {
    return view('pages/pilotos/index2');
})->name('pilotos2');

Route::get('/piloto/{id}', [PilotoController::class, 'index'])->name('piloto');


// ESCUDERÍAS
Route::get('escuderias', function () {
    return view('pages/escuderias/index');
})->name('escuderias');

Route::get('/escuderia/{id}', [EscuderiaController::class, 'datosescuderia'])->name('escuderia');

// CIRCUITOS

Route::get('circuitos', function () {
    return view('pages/circuitos/index');
})->name('circuitos');
Route::get('circuitos2', function () {
    return view('pages/circuitos/index2');
})->name('circuitos2');

Route::get('/circuito/{id}', [CircuitoController::class, 'index'])->name('circuito');


