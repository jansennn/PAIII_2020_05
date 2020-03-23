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
	Alert::success('Success Title', 'Success Message');
    return view('welcome');
});


Route::prefix('admin')->group(function(){
    Route::resource('/kategori', 'CategoryWisataController')->except([
        'create', 'show'
    ]);
});

Route::get('/coba', function(){
	return view('wisatawan.home');
});