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

Route::get('/', 'CursoController@index')->name('curso.index');
Route::get('/{id}', 'CursoController@show')->name('curso.show');
Route::get('/busca/{data}', 'CursoController@busca')->name('curso.busca');
