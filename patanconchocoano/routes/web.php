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
// Vista Pagina de inicio
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Vista del home administrador
Route::get('/home', 'HomeController@index')->name('home');
// Vistas relacionadas con los productos
Route::get('/producto/delete/{id}', 'productoController@delete')->middleware('auth');
Route::get('/producto/update/{id}', 'productoController@ver')->middleware('auth');
Route::post('/productos/editar', 'productoController@editar')->middleware('auth');
Route::post('productos/guardar', 'productoController@guardar')->middleware('auth');
Route::get('productos/crear', 'productoController@crear')->middleware('auth');
