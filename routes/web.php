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
//     return view('welcome');
// });

Route::get('/', 'LivroController@index');
Route::get('/create', 'LivroController@create');
Route::post('/create', 'LivroController@store');
Route::get('/edit/{id}', 'LivroController@edit');
Route::put('/edit/{id}', 'LivroController@update');
Route::delete('/delete/{id}', 'LivroController@destroy');

//Route::resource("/livro" , "LivroController");
