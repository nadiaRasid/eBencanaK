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
//home

//Halamanutama
Route::get('/', 'ContactController@welcome');
Route::get('/infobencana', 'ContactController@infobencana');
Route::get('/contact', 'ContactController@contact');
Route::get('/notifikasi', 'KawasanBencana@notifikasi');
Route::get('/noti', 'ContactController@noti');

Auth::routes();
//admin
Route::group(['middleware' =>  ['auth', 'Admin']], function() {

    //Pusat Pemindahan
      Route::get('/pusatPemindahan2', 'PusatPemindahanUsController@index2');
      Route::get('/pusatPemindahan2/create', 'PusatPemindahanUsController@create');
      Route::post('/pusatPemindahan2', 'PusatPemindahanUsController@store');
      Route::get('/pusatPemindahan/{pusatPemindahan}', 'PusatPemindahanUsController@show');
      Route::get('/pusatPemindahan/{pusatPemindahan}/edit', 'PusatPemindahanUsController@edit');
      Route::patch('/pusatPemindahan/{pusatPemindahan}', 'PusatPemindahanUsController@update');
      Route::delete('/pusatPemindahan/{pusatPemindahan}/delete', 'PusatPemindahanUsController@destroy');

      //Data Bencana
      Route::get('/DataBencana', 'DataBencanasController@index');
      Route::get('/DataBencana/create', 'DataBencanasController@create');
      Route::post('/DataBencana', 'DataBencanasController@store');
      Route::get('/DataBencana/{DataBencana}', 'DataBencanasController@show');
      Route::get('/DataBencana/{DataBencana}/edit', 'DataBencanasController@edit');
      Route::patch('/DataBencana/{DataBencana}', 'DataBencanasController@update');
      Route::delete('/DataBencana/{DataBencana}/delete', 'DataBencanasController@destroy');

      //Amaran Bencana
      Route::get('/AmaranBencana', 'AmaranBencanasController@index');
      Route::get('/AmaranBencana/create', 'AmaranBencanasController@create');
      Route::post('/AmaranBencana', 'AmaranBencanasController@store');
      Route::get('/AmaranBencana/{AmaranBencana}', 'AmaranBencanasController@show');
      Route::get('/AmaranBencana/{AmaranBencana}/edit', 'AmaranBencanasController@edit');
      Route::patch('/AmaranBencana/{AmaranBencana}', 'AmaranBencanasController@update');
      Route::delete('/AmaranBencana/{AmaranBencana}/delete', 'AmaranBencanasController@destroy');
      Route::get('/AmaranBencana/{AmaranBencana}/published', 'AmaranBencanasController@published');

      //Kawasan Bencana
      Route::get('/KawasanBencana', 'KawasanBencanasController@index');
      Route::get('/KawasanBencana/create', 'KawasanBencanasController@create');
      Route::post('/KawasanBencana', 'KawasanBencanasController@store');
      Route::get('/KawasanBencana/{KawasanBencana}', 'KawasanBencanasController@show');
      Route::get('/KawasanBencana/{KawasanBencana}/edit', 'KawasanBencanasController@edit');
      Route::patch('/KawasanBencana/{KawasanBencana}', 'KawasanBencanasController@update');
      Route::delete('/KawasanBencana/{KawasanBencana}/delete', 'KawasanBencanasController@destroy');
      Route::get('/KawasanBencana/{KawasanBencana}/published', 'KawasanBencanasController@published');

      //LaporKehilangan
      Route::get('/LaporKehilangan2/lapor', 'LaporKehilangansController@lapor');
      Route::get('/LaporKehilangan2/{LaporKehilangan}/edit2', 'LaporKehilangansController@edit2');
      Route::patch('/LaporKehilangan2/{LaporKehilangan}', 'LaporKehilangansController@simpan');

});
//orangawam
Route::group(['middleware' =>  ['auth', 'OrangAwam']], function() {

  //Lapor kehilangan
  // Route::resource('LaporKehilangan','LaporKehilangansController');
    Route::get('/LaporKehilangan', 'LaporKehilangansController@index');
    Route::get('/LaporKehilangan/create', 'LaporKehilangansController@create');
    Route::get('/semakan', 'LaporKehilangansController@semakan');
    Route::post('/LaporKehilangan', 'LaporKehilangansController@store');
    Route::get('/LaporKehilangan/{LaporKehilangan}', 'LaporKehilangansController@show');
    Route::get('/LaporKehilangan/{LaporKehilangan}/edit', 'LaporKehilangansController@edit');
    Route::patch('/LaporKehilangan/{LaporKehilangan}', 'LaporKehilangansController@update');
    Route::delete('/LaporKehilangan/{LaporKehilangan}/delete', 'LaporKehilangansController@destroy');

   //pusatPemindahan
   Route::get('/pusatPemindahan', 'PusatPemindahanUsController@index');

});
//usershare
Route::group(['before' => 'Admin|OrangAwam'], function() {

  //Home
  Route::get('/home', 'HomeController@index');
  //profile pengguna
  Route::resource('/profile', 'PenggunasController');
  //DataBencana
  Route::get('/maklumat', 'DataBencanasController@maklumat');
  //AmaranBencana
  //Route::get('/noti', 'AmaranBencanasController@noti');
  Route::get('/AmaranBencana/{AmaranBencana}/details', 'AmaranBencanasController@details');
  //KawasanBencana
  Route::get('/notifikasi', 'KawasanBencanasController@notifikasi');
  Route::get('/KawasanBencana/{KawasanBencana}/details', 'KawasanBencanasController@details');

  //Statistik
  // Route::get('/',array('as'=>'chart.statistik','KawasanBencana'=>'KawasanBencanasController@pieChart'));
  Route::get('/statistic', 'KawasanBencanasController@pieChart');
  Route::get('/statistic2', 'KawasanBencanasController@barChart');

});
