<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\EscuderiaController;
use \App\Http\Controllers\CircuitoController;
use \App\Http\Controllers\PilotoController;
use \App\Http\Controllers\ClasificacionController;
use \App\Http\Controllers\NoticiaController;
use \App\Http\Controllers\AdministradorController;
use \App\Http\Controllers\MailController;





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
Auth::routes(['verify' => true]);


// RUTAS PROTEGIDAS

//  MI ESCUDERÍA
Route::resource('crearescuderia', EscuderiaController::class)->middleware(['auth', 'verified']);

Route::get('/miescuderia', [EscuderiaController::class, 'loadmiescuderia'])->name('miescuderia')->middleware(['auth', 'verified']);


//  MISTERF1 CLASIFICACIÓN
Route::get('/clasificacion', [ClasificacionController::class, 'index'])->name('clasificacion')->middleware(['auth', 'verified']);

        // Subir Noticias
    // FORMULARIO
Route::get('subirnoticia', function () {
    return view('pages/noticias/crearnoticia');
})->name('subirnoticia')->middleware(['editor', 'verified']);

    // CONTROLADOR
Route::resource('crearnoticia', NoticiaController::class)->middleware(['auth', 'editor', 'verified']);
    // Cargar noticias
Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias')->middleware(['auth', 'verified']);


// Gestion de Usuarios
Route::get('/paneluser', [AdministradorController::class, 'index'])->name('paneluser')->middleware(['auth', 'admin', 'verified']);
Route::match(['get', 'post'], 'useredit/{usuario}', [AdministradorController::class, 'edit'])->name('useredit')->middleware(['auth', 'admin', 'verified']);
Route::match(['get', 'put'], 'userupdate/{usuario}', [AdministradorController::class, 'update'])->name('userupdate')->middleware(['auth', 'admin', 'verified']);
Route::match(['get', 'put'], 'userdelete/{usuario}', [AdministradorController::class, 'delete'])->name('userdelete')->middleware(['auth', 'admin', 'verified']);




// RUTAS SIN PROTECCIÓN

Route::match(['get', 'post'], 'send-email', [MailController::class, 'index'])->name('send-email');



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


