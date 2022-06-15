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

Route::get('/', function () {
    return view('index');
})->name('home');

Auth::routes();

//  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// RUTAS PROTEGIDAS

Route::get('crearescuderia', function () {
    return view('pages/crearescuderia');
})->name('crearescuderia')->middleware('auth');
// RUTAS SIN PROTECCIÓN

Route::get('calendario', function () {
    return view('pages/calendario');
})->name('calendario');

Route::get('calendario', function () {
    return view('pages/calendario');
})->name('calendario');

// PILOTOS
Route::get('alonso', function () {
    return view('pages/pilotos/alonso');
})->name('alonso');


// ESCUDERÍAS
Route::get('ferrari', function () {
    return view('pages/escuderias/ferrari');
})->name('ferrari');


// CIRCUITOS
Route::get('monaco', function () {
    return view('pages/circuitos/monaco');
})->name('monaco');


