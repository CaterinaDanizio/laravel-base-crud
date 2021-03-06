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

Route::get('/', 'PeripheralController@index')-> name('peripheralIndex');

Route::get('/show/{id}', 'PeripheralController@show')-> name('peripheralShow');

Route::get('/create', 'PeripheralController@create')-> name('peripheralCreate');

Route::post('/store', 'PeripheralController@store')-> name('peripheralStore');
