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
    return view('welcome');
});

Auth::routes();

Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('cruceros', App\Http\Controllers\CruceroController::class);
Route::resource('tripulacion', App\Http\Controllers\TripulacionController::class);
Route::resource('reservas', App\Http\Controllers\ReservaController::class);
Route::resource('actividades', App\Http\Controllers\ActividadeController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
