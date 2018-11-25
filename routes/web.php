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

Route::get('/', 'IndexController@show')
      ->name('principal');

Route::get('/biowell', 'BiowellController@index')
      ->name('biowell');
Route::get('/biowellBolivia', 'BiowellController@index2')
      ->name('biowellBolivia');
Route::get('/biowell/AcercaDe', 'BiowellController@indexQueEs')
->name('ques');
Route::get('/biowell/historia', 'BiowellController@indexHistoria')
->name('historia');
Route::get('/biowell/salud', 'BiowellController@indexSalud')
->name('salud');
Route::get('/biowell/deporte', 'BiowellController@indexDeporte')
->name('deporte');
Route::get('/biowell/estres', 'BiowellController@indexEstres')
->name('estres');
Route::get('/biowell/ambiente', 'BiowellController@indexAmbiente')
->name('ambiente');





Route::get('/contactos', 'ContactosController@index')
      ->name('contactos');

Route::get('/evento', 'EventosController@index')
      ->name('eventos');
Route::get('/evento/{id}', 'EventosController@show')
      ->name('eventosShow');      
Route::get('/oferta', 'ProductosServiciosController@index')
      ->name('oferta');
Route::get('/oferta/productos', 'ProductosServiciosController@indexProductos')
      ->name('productos');
Route::get('/oferta/servicios', 'ProductosServiciosController@indexServicios')
      ->name('servicios');
Route::get('/oferta/productos/{id}', 'ProductosServiciosController@showproductos')
      ->name('productosshow');
Route::get('/oferta/servicios/{id}', 'ProductosServiciosController@showservicios')
      ->name('serviciosshow');

Route::get('/multimedia','MultimediaController@index')
      ->name('multimedia');
Route::get('/preguntas-frecuentes','PreguntasFrecuentesController@index')
      ->name('pf');

Route::post('suscripcion','SuscripcionController@suscribir')->name('suscripcion');