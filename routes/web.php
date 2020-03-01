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

Route::get('/articulos', 'ArticulosController@index')->name('articulos');

Route::get('/carnes', 'CarnesController@index')->name('carnes');

Route::get('/cereales', 'CerealesController@index')->name('cereales');

Route::get('/frutas', 'FrutasController@index')->name('frutas');

Route::get('/lacteos', 'LacteosController@index')->name('lacteos');



//Route::get('tienda', 'TiendaController');
