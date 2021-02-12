<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/client', 'clientController@index');
Route::get('/client/{client}/edit', 'clientController@edit');
Route::get('/client/create', 'clientController@create');
Route::post('/client','clientController@store');
Route::put('/client/{client}', 'clientController@update');
Route::delete('/client/{client}', 'clientController@destroy');
Route::get('/client/search', 'clientController@search');