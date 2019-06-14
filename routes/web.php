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
    return view('index');
});

Route::get('/tim', 'TimController@index');
Route::get('/tim/tambah', 'TimController@tambah');
Route::post('/tim/store', 'TimController@store');
Route::get('/tim/edit/{id}', 'TimController@edit');
Route::post('/tim/update', 'TimController@update');
Route::get('/tim/hapus/{id}', 'TimController@hapus');
Route::get('/tim/squad/{id}', 'TimController@squad');
Route::get('/tim/squadtambah', 'TimController@squadtambah');
Route::post('/tim/squadstore', 'TimController@squadstore');

Route::get('/klasemen', 'KlasemenController@index');

Route::get('/pertandingan', 'PertandinganController@index');
Route::get('/pertandingan/tambah/{id}', 'PertandinganController@tambah');
Route::post('/pertandingan/store', 'PertandinganController@store');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
