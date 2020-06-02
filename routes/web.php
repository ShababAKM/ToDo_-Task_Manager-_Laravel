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


Route::get('todos','todosController@index');
Route::get('todos/{todo}','todosController@show');
Route::get('new-todos','todosController@create');
Route::post('store-todos','todosController@store');
Route::get('todos/{todo}/edit','todosController@edit');
Route::post('todos/{todo}/update-todos','todosController@update');
Route::get('todos/{todo}/delete','todosController@delete');