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
Route::resource('informe', 'InformeController');
Route::get('/muestra/{muestra}','MostrarController@mostrar')->name('muestra.show');
Route::get('/delete/{delete}/{delete2}','EliminarController@destroy')->name('delete.clear');
Route::get('/doc-tutores','DocTutorController@index')->name('doc-tutores.index');
Route::get('/doc-tutores/tribunal','DocTutorController@tribunal')->name('doc-tutores.tribunal');
Route::get('/notificaciones/notify','DocTutorController@notify')->name('notificaciones.notify');
Route::get('/actas/crear','DocTutorController@actas')->name('actas.crear');
Route::get('/notificaciones/{email}','EmailController@enviar')->name('notificaciones.email');
Route::get('/designacion-pdf/{pdf}','PdfController@exportPdf')->name('designacion-pdf.pdf');
Route::get('/defensa','DefensaController@index')->name('defensa.index');
Route::get('/defensa/{asignar}/asignar','DefensaController@asignar')->name('defensa.asignar');
Route::PUT('/defensa/{asignar}','DefensaController@update')->name('defensa.update');