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

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index');
    Route::get('/LaporKehilangan', 'LaporKehilangansController@index');
    Route::get('/LaporKehilangan/create', 'LaporKehilangansController@create');
    Route::post('/LaporKehilangan', 'LaporKehilangansController@store');
    Route::get('/LaporKehilangan/{LaporKehilangan}', 'LaporKehilangansController@show');
    Route::get('/LaporKehilangan/{LaporKehilangan}/edit', 'LaporKehilangansController@edit');
    Route::patch('/LaporKehilangan/{LaporKehilangan}', 'LaporKehilangansController@update');
    Route::get('/PusatPemindahanU', 'PusatPemindahanUsController@index');
});

Auth::routes();
Route::get('/home', 'HomeController@index');
