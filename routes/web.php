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

Route::get('/', 'inicioController@index');

Route::get('/{id}','inicioController@index');
Route::get('/A765/listar','VehiculoController@index')->name('listar');
Route::get('/A765/registrar','VehiculoController@create')->name('crear');
Route::post('/A765/registrar','VehiculoController@store')->name('guardar');
Route::get('/A765/estadistica','VehiculoController@stats')->name('stats');

