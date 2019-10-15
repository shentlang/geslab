<?php

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



Route::get('/','inicioController@index');
Route::resource('/estudiante', 'EstudianteController');



Route::resource('/proyecto', 'ProyectoController');
Route::resource('/docente', 'DocenteController');
Route::resource('/prueba', 'PruebaController');
Route::resource('/notas', 'NotasController');
Auth::routes();
Route::resource('/user', 'UserController');
Route::resource('/funcion', 'DocenteproyectoController');

