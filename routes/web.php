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
Route::resource('/director', 'DirectorController');
Route::resource('/estudiante', 'EstudianteController');
Route::resource('/tutor', 'TutorController');
Route::resource('/proyecto', 'ProyectoController');