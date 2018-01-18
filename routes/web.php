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

//Nuevas rutas del programa 
//Route::resource('/registro','RegistrodepersonasController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('registros.index','RegistroController');
Route::get('/registros','RegistroController@index')->name('registros.index');

//Ruta para crear un formulario de ingreso de registros
Route::get('/registros/nuevo','RegistroController@create')->name('registros.create');
Route::post('/registros','RegistroController@store');
//Route::resource('registros','RegistrodepersonasController');
Route::get('/registros/{registro}','RegistroController@show')->name('registros.ver');
Route::get('/registros/{registro}/editar/','RegistroController@edit')->name('registros.edit');
Route::patch('/registros/{registro}','RegistroController@update');


