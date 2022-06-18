<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

/*Route::get('/', function () {
    return view('web.index');
});*/

//Página principal, usuarios no logados.
Route::get('/', 'App\Http\Controllers\CruceroController@ofertas')->name('web.index');

Auth::routes();

Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('cruceros', App\Http\Controllers\CruceroController::class);
Route::resource('tripulacion', App\Http\Controllers\TripulacionController::class);
Route::resource('reservas', App\Http\Controllers\ReservaController::class);
Route::resource('actividades', App\Http\Controllers\ActividadeController::class);

//Perfil administrador
Route::get('user/profile/{id}', 'App\Http\Controllers\UserProfileController@profile')->name('user.profile');
Route::post('user/profile/{id}', 'App\Http\Controllers\UserProfileController@update')->name('user.update');

//Perfil usuario
Route::get('perfilUsuario/{id}', 'App\Http\Controllers\UserProfileController@profileUser')->name('web.perfilUsuario');
Route::post('perfilUsuario/{id}', 'App\Http\Controllers\UserProfileController@updateUser')->name('user.updateUser');

//Perfil Tripulante acceder nada mas loguear
Route::get('perfilTripulante/{id}', 'App\Http\Controllers\UserProfileController@profileTripulante')->name('web.perfilTripulante');
Route::post('perfilTripulante/{id}', 'App\Http\Controllers\UserProfileController@updateTripulante')->name('user.updateTripulante');

//Parte publica
//Route::get('/ofertas', 'App\Http\Controllers\CruceroController@ofertas')->name('web.index');

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

Route::get('/home',function(){
    return view('dashboard');
});

/*Route::get('/about',function(){
    return view('about');
});

Route::get('/contact',function(){
    return view('contact');
});*/