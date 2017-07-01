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

Route::get('/', function () {
    return view('welcome');
});

//rutas productos
Route::resource('almacen/productos', 'ProductoController');
Route::post('almacen/productos/search', ['as'=>'almacen/productos/search', 'uses'=>'ProductoController@search']);

//rutas impuestos
Route::resource('configuracion/impuestos', 'ImpuestoController');
Route::post('configuracion/impuestos/search', ['as'=>'configuracion/impuestos/search', 'uses'=>'ImpuestoController@search']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
