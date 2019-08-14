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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mahasiswa','BiodataMahasiswaController@index');
Route::get('/orangtua','BiodataOrangtuaController@index');
Route::get('/orangtua/show1','BiodataOrangtuaController@show1');
Route::get('/orangtua/show2','BiodataOrangtuaController@show2');
Route::get('/nilaisemester','NilaiSemesterController@index');
Route::get('/absen','AbsenController@index');
Route::get('/jadwalkuliah','JadwalKuliahController@index');
Route::get('/krs','KRSController@index');
Route::get('/khs','KHSController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
