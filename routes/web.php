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
});

Route::resource('autores', 'AutorController');
Route::resource('libros', 'LibroController');
Route::resource('usuarios', 'UsuarioController');
Route::resource('passusuarios', 'PassUsuarioController');
Route::resource('rolesusuarios', 'RolController');
Route::resource('alquileres', 'AlquilerController');
