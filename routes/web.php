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

Route::get('home', function(){
	return view('home');
})->name('home');

Route::resource('articulos', 'ArticulosController');

Route::resource('carnes', 'CarnesController');

Route::resource('cereales', 'CerealesController');

Route::resource('frutas', 'FrutasController');

Route::resource('lacteos', 'LacteosController');



//Route::get('tienda', 'TiendaController');
