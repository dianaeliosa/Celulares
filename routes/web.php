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

Route::get('celulares', 'CelularController@index')->name('celulares.index');

Route::get('celulares/crear', 'CelularController@create')->name('celulares.create');

Route::post('celulares/crear', 'CelularController@store')->name('celulares.store');

Route::get('celulares/{celular}', 'CelularController@show')->name('celulares.show');

Route::get('celulares/{celular}/editar', 'CelularController@edit')->name('celulares.edit');

Route::put('celulares/{celular}/editar', 'CelularController@update')->name('celulares.update');

Route::delete('celulares/{celular}', 'CelularController@destroy')->name('celulares.destroy');

Route::get('view', function(){
	return view('layouts.app');

});

