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

Route::get('/dashboard', 'DashboardController@index');

// Jurusan route
Route::get('/jurusan','JurusanController@index');
Route::get('/jurusan/tambah','JurusanController@create');
Route::post('/jurusan/store', 'JurusanController@store');
Route::get('/jurusan/edit/{id}', 'JurusanController@edit');
Route::put('/jurusan/update/{id}', 'JurusanController@update');
Route::get('/jurusan/destroy/{id}', 'JurusanController@destroy');

// Kelas route
Route::get('/kelas','KelasController@index');
Route::get('/kelas/tambah','KelasController@create');
Route::post('/kelas/store', 'KelasController@store');
Route::get('/kelas/edit/{id}', 'KelasController@edit');
Route::put('/kelas/update/{id}', 'KelasController@update');
Route::get('/kelas/destroy/{id}', 'KelasController@destroy');

// kandidat route
Route::get('/kandidat','KandidatController@index');
Route::get('/kandidat/tambah','KandidatController@create');
Route::post('/kandidat/store', 'KandidatController@store');
Route::get('/kandidat/edit/{id}', 'KandidatController@edit');
Route::put('/kandidat/update/{id}', 'KandidatController@update');
Route::get('/kandidat/destroy/{id}', 'KandidatController@destroy');


// pemilih route
Route::get('/pemilih','PemilihController@index');
Route::get('/generate_barcode','PemilihController@generate_barcode');
Route::post('/generate','PemilihController@generate');
Route::get('/barcode','PemilihController@barcode')->name('barcode');

// User
 Route::get('/user/my-profile', 'UserController@index');
 Route::get('/user/edit-my-profile', 'UserController@create');
 Route::get('/user/ubah-password', 'UserController@ubah_password');
 Route::post('/user/ubah_password_proses', 'UserController@ubah_password_proses');
 Route::post('/user/update_profile/{id}', 'UserController@update');

// Auth
Route::get('/administrator', 'LoginController@index');
Route::get('/auth/login', 'LoginController@login');
Route::get('/auth/logout', 'LoginController@logout');
Route::post('/auth/proses_login', 'LoginController@proses_login');

// Home
Route::get('/','HomeController@index');
Route::get('/bbc_evoting','HomeController@home')->name('bbc_evoting');
Route::get('/login','HomeController@login')->name('login');
Route::post('/login_action','HomeController@login_action')->name('login_action');
Route::get('/logout', 'HomeController@logout')->name('logout');
Route::get('/vote/{id}/{tahun_ajaran1}/{tahun_ajaran2}', 'HomeController@vote')->name('vote');

// Live
Route::get('/live', 'LiveController@index');
Route::get('/live_action', 'LiveController@action');
Route::get('/get_data', 'LiveController@get_data');
Route::get('/done/{tahun_ajaran1}/{tahun_ajaran2}','LiveController@result');