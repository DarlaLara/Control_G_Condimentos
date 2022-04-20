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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ventas
Route::get('/ventas', 'ventasController@index')->name('ventas');
Route::get('/ventas/create', 'ventasController@create')->name('ventas.create');
Route::post('/ventas/store', 'ventasController@store')->name('ventas.store');
Route::get('/ventas/edit/{per_id}', 'ventasController@edit')->name('ventas.edit');
Route::post('/ventas/update{per_id}', 'ventasController@update')->name('ventas.update');
Route::post('/ventas/destroy{per_id}', 'ventasController@destroy')->name('ventas.destroy');
//productos
Route::get('/productos', 'productosController@index')->name('productos');
Route::get('/productos/create', 'productosController@create')->name('productos.create');
Route::post('/productos/store', 'productosController@store')->name('productos.store');
Route::get('/productos/edit/{per_id}', 'productosController@edit')->name('productos.edit');
Route::post('/productos/update{per_id}', 'productosController@update')->name('productos.update');
Route::post('/productos/destroy{per_id}', 'productosController@destroy')->name('productos.destroy');
//proveedor
Route::get('/proveedor', 'proveedorController@index')->name('proveedor');
Route::get('/proveedor/create', 'proveedorController@create')->name('proveedor.create');
Route::post('/proveedor/store', 'proveedorController@store')->name('proveedor.store');
Route::get('/proveedor/edit/{dor_id}', 'proveedorController@edit')->name('proveedor.edit');
Route::post('/proveedor/update{dor_id}', 'proveedorController@update')->name('proveedor.update');
Route::post('/proveedor/destroy{dor_id}', 'proveedorController@destroy')->name('proveedor.destroy');
//clientes
Route::get('/clientes', 'clientesController@index')->name('clientes');
Route::get('/clientes/create', 'clientesController@create')->name('clientes.create');
Route::post('/clientes/store', 'clientesController@store')->name('clientes.store');
Route::get('/clientes/edit/{cli_id}', 'clientesController@edit')->name('clientes.edit');
Route::post('/clientes/update{cli_id}', 'clientesController@update')->name('clientes.update');
Route::post('/clientes/destroy{cli_id}', 'clientesControl@destroy')->name('clientes.destroy');
//usuarios
Route::get('/users', 'usersController@index')->name('users');
Route::get('/users/create', 'usersController@create')->name('users.create');
Route::post('/users/store', 'usersController@store')->name('users.store');
Route::get('/users/edit/{usu_id}', 'usersController@edit')->name('users.edit');
Route::post('/users/update{usu_id}', 'usersController@update')->name('users.update');
Route::post('/users/destroy{usu_id}', 'usersController@destroy')->name('users.destroy');
//inventario
Route::get('/inventario', 'inventarioController@index')->name('inventario');
Route::get('/inventario/create', 'inventarioController@create')->name('inventario.create');
Route::post('/inventario/store', 'inventarioController@store')->name('inventario.store');
Route::get('/inventario/edit/{inv_id}', 'inventarioController@edit')->name('inventario.edit');
Route::post('/inventario/update{inv_id}', 'inventarioController@update')->name('inventario.update');
Route::post('/inventario/destroy{inv_id}', 'inventarioController@destroy')->name('inventario.destroy');
