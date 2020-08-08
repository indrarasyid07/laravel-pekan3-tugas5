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

// Route::get('/', function () {
//     return view('Hari2.index');
// });

// Route::get('/register','HomeController@register');

// Route::post('/welcome','AuthController@welcome');

// Route::get('/master', function() {
//     return view('adminlte.master');
// });

// Route::get('/items', function(){
//     return view('items.index');
// });

// Route::get('/items/create', function(){
//     return view('items.create');
// });

// Route::get('/', function(){
//     return view('Hari3.table');
// });

// Route::get('/data-tables', function(){
//     return view('Hari3.data-tables');
// });

Route::get('/pertanyaan/create','PertanyaanController@create');
Route::post('/pertanyaan','PertanyaanController@store');
Route::get('/pertanyaan','PertanyaanController@index');
Route::get('/pertanyaan/{id}','PertanyaanController@show');
Route::get('/pertanyaan/{id}/edit','PertanyaanController@edit');
Route::put('/pertanyaan/{id}','PertanyaanController@update');
Route::delete('/pertanyaan/{id}','PertanyaanController@destroy');