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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('auth/index','RegisterController@index')->name('usuario');
Route::resource('usuario','UserController');
Route::resource('contacto','ContactosController');
Route::get('mensaje','MensajeController@index');
Route::post('/mensaje','MensajeController@store')->name('mensaje.store');
Route::get('mensaje/{id}','MensajeController@show')->name('mensaje.show');
