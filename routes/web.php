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

Route::get('/products', function () {
    return view('form');
});
Route::post('/store', 'formController@store');

Route::get('/', 'formController@index');
Route::get('/Admin','formController@show');
Route::get('/Admin/{customer}/edit', 'formController@edit');
Route::get('/Admin/{customer}/delete', 'formController@destroy');
Route::put('/Admin/{customer}', 'formController@update');

