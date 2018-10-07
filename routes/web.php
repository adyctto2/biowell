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

Route::get('/contactos', 'ContactosController@index')
      ->name('contactos');

Route::get('/evento', 'EventosController@index')
      ->name('eventos');
Route::get('/eventos', 'EventosController@show')
      ->name('listaEventos');

Route::get('/productos', 'ProductosServiciosController@index')
      ->name('listaProductos');
Route::get('/producto', 'ProductosServiciosController@ver')
      ->name('verProducto');
