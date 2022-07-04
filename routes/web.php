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

Route::get('/', function () {
    return view('login2');
});

Route::get('/login2', 'AuthController@login')->name('login2');
Route::post('/postLogin', 'AuthController@postLogin');
Route::get('keluar', 'AuthController@keluar');
Route::get('/gantipass', 'AuthController@gantiPass');
Route::patch('/gantipass', 'AuthController@updatePass')->name('password.ganti');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', 'HomeController@dashboard');
    Route::get('/servicemasuk', 'ServiceController@masuk');
    Route::get('/info/{id}', 'ServiceController@info');
    Route::get('/printPDF/{id}', 'ServiceController@printPDF');
    Route::get('/printExcel', 'ServiceController@printExcel');
    Route::get('/inputData', 'ServiceController@input');
    Route::post('/inputData', 'ServiceController@store');
    Route::get('/editdata/{id}', 'ServiceController@edit');
    Route::post('/editdata/{id}', 'ServiceController@update');
    Route::get('/hapusdata/{id}', 'ServiceController@hapus');
    Route::get('/servicekeluar', 'ServiceController@keluar');
    Route::get('/laporan', 'ServiceController@laporan');
    Route::get('/filter-laporan', 'ServiceController@filter_laporan');
    Route::get('/print-laporan', 'ServiceController@print_laporan');
    Route::get('/print-excel', 'ServiceController@export');


    Route::get('/status/{id}', 'ServiceController@selesai');
    Route::get('/status/{id}/batalSelesai', 'ServiceController@batalselesai');
    Route::get('/status/{id}/pembatalan', 'ServiceController@pembatalan');
    Route::get('/status/{id}/lanjutkan', 'ServiceController@lanjutkan');

    Route::get('/admin', 'UserController@admin');
    Route::get('/inputDataAdmin', 'UserController@inputData');
    Route::post('/inputDataAdmin', 'UserController@storeData');
    Route::get('/editdataadmin/{id}', 'UserController@editData');
    Route::post('/editdataadmin/{id}', 'UserController@update');
});
