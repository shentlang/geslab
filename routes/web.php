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
Route::get('/doc-tutores/defensa','DocTutorController@defensatribunal')->name('doc-tutores.defensa');
Route::get('/notificaciones/notify','DocTutorController@notify')->name('notificaciones.notify');
Route::get('/actas/crear','DocTutorController@actas')->name('actas.crear');
Route::get('/notificaciones/{email}','EmailController@enviar')->name('notificaciones.email');
Route::get('/designacion-pdf/{pdf}','PdfController@exportPdf')->name('designacion-pdf.pdf');
Route::get('/designacion-pdf2/{pdf}','PdfController@exportPdf2')->name('designacion-pdf2.pdf');
Route::get('/designacion-pdf3/{pdf}','PdfController@exportPdf3')->name('designacion-pdf3.pdf');
Route::get('/designacion-pdf4/{pdf}','PdfController@exportPdf4')->name('designacion-pdf4.pdf');
Route::get('/defensa','DefensaController@index')->name('defensa.index');
Route::get('/defensa/{asignar}/asignar','DefensaController@asignar')->name('defensa.asignar');
Route::PUT('/defensa/{asignar}','DefensaController@update')->name('defensa.update');
Route::get('/plan','PlanesController@index')->name('plan.index');
Route::get('/plan/create','PlanesController@create')->name('plan.create');
Route::POST('/plan','PlanesController@store')->name('plan.store');
Route::get('/director','PretribunalController@index')->name('director.index');
Route::get('/director/create','PretribunalController@create')->name('director.create');
Route::POST('/director','PretribunalController@store')->name('director.store');
Route::get('/lugar','LugarController@index')->name('lugar.index');
Route::get('/lugar/create','LugarController@create')->name('lugar.create');
Route::POST('/lugar','LugarController@store')->name('lugar.store');
Route::get('/decano','DecanoController@index')->name('decano.index');
Route::get('/decano/create','DecanoController@create')->name('decano.create');
Route::POST('/decano','DecanoController@store')->name('decano.store');

Route::get('/sms','SmsController@sms')->name('sms.send');
Route::get('/listsms','SmsController@index')->name('listsms.index');