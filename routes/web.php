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

Route::get('/', 'HomeController@index');
Route::get('/login', 'AutentikasiController@login');
Route::prefix('admin')->group(function(){
	Route::get('/index','CbtController@index1');
    Route::resource('/kategori', 'CategoryWisataController');
    Route::resource('CategoryAkomodasi', 'CategoryAkomodasiController');
    Route::resource('/ObjekWisata', 'ObjekWisataController');
    Route::resource('/Akomodasi', 'AkomodasiController');
    Route::resource('/Budaya', 'BudayaController');
    Route::resource('/Kuliner', 'KulinerController');
    Route::resource('/Event', 'EventController');
    Route::resource('/Transportasi', 'TransportasiController');
    Route::resource('/User', 'CbtController');

    //test
    Route::post('/testStore','ObjekWisataController@store');
    Route::get('/testIndexObjekWisata','ObjekWisataController@index');
});
//login
Route::get('/login', 'AutentikasiController@login');
Route::prefix('autentikasi')->group(function(){
    Route::post('login_process', 'AutentikasiController@login_process');
    //logout
	Route::get('logout', 'AutentikasiController@logout_process');
});

//Kabupaten
Route::get('/Kab/{id}', 'KabupatenController@index');
Route::get('/Kab/Information/ObjekWisata/{id}', 'ObjekWisataController@displayObjekWisata');
Route::get('/Kab/Information/Akomodasi/{id}', 'AkomodasiController@displayAkomodasi');
Route::get('/Kab/Information/Kuliner/{id}', 'KulinerController@displayKuliner');

//Transportasion
Route::get('/transportasion', 'TransportasiController@displayTransportasi');

//Map
Route::get('/map', 'MapController@displayMap');

//Search
Route::post('/Search', 'SearchController@search');