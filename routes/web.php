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

    //profile pengguna
     Route::resource('/profile', 'PenggunasController');
    // Route::get('/profile', 'PenggunasController@index');
    // Route::get('/profile/{profile}/edit', 'PenggunasController@edit');
    // Route::patch('/profile/{profile}', 'PenggunasController@update');

    //Lapor kehilangan
    Route::resource('/LaporKehilangan','LaporKehilangansController');

    // Route::get('/LaporKehilangan', 'LaporKehilangansController@index');
    // Route::get('/LaporKehilangan/create', 'LaporKehilangansController@create');
    // Route::post('/LaporKehilangan', 'LaporKehilangansController@store');
    // Route::get('/LaporKehilangan/{LaporKehilangan}', 'LaporKehilangansController@show');
    // Route::get('/LaporKehilangan/{LaporKehilangan}/edit', 'LaporKehilangansController@edit');
    // Route::patch('/LaporKehilangan/{LaporKehilangan}', 'LaporKehilangansController@update');
    // Route::delete('/LaporKehilangan/{LaporKehilangan}/delete', 'LaporKehilangansController@destroy');


    //Pusat Pemindahan
    //Route::resource('/pusatPemindahan','PusatPemindahanUsController');

      Route::get('/pusatPemindahan', 'PusatPemindahanUsController@index');
      Route::get('/pusatPemindahan2', 'PusatPemindahanUsController@index2');
      Route::get('/pusatPemindahan2/create', 'PusatPemindahanUsController@create');
      Route::post('/pusatPemindahan2', 'PusatPemindahanUsController@store');
      Route::get('/pusatPemindahan/{pusatPemindahan}', 'PusatPemindahanUsController@show');
      Route::get('/pusatPemindahan/{pusatPemindahan}/edit', 'PusatPemindahanUsController@edit');
      Route::patch('/pusatPemindahan/{pusatPemindahan}', 'PusatPemindahanUsController@update');
      Route::delete('/pusatPemindahan/{pusatPemindahan}/delete', 'PusatPemindahanUsController@destroy');

});

Auth::routes();
