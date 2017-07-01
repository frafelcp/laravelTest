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

Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function(){
  Route::resource('clientes', 'ClientesController');
  Route::resource('marcas', 'MarcasController');
  Route::resource('producto-categorias', 'ProductoCategoriasController');
  Route::resource('productos', 'ProductosController');
  Route::resource('usuarios', 'UsuariosController');

  Route::get('pedidos', [
    'uses' => 'PedidosController@index',
    'as' => 'pedidos.index',
  ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
