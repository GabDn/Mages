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

Route::get('/admin', 'HomeController@index')->name('home');

Route::get('profesor/nuevo', "ProfesorController@nuevo")->name("profesor.nuevo");
Route::post('profesor/save', "ProfesorController@create")->name('profesor.store');
Route::get('profesor/{id}', "ProfesorController@show")->name('profesor.show');
Route::get('profesor', "ProfesorController@index")->name("profesor.consulta");
Route::get('profesor/busqueda', "ProfesorController@search")->name('profesor.busqueda');
Route::get('profesor/actualizar/{id}', "ProfesorController@edit")->name('profesor.update');
Route::put('profesor/actualizar/{id}', "ProfesorController@update")->name('profesor.actualizar');
Route::get('profesor/baja/{id}', "ProfesorController@delete");

