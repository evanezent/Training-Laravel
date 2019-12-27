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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'MahasiswaController@homepage');
Route::get('/homepage', 'MahasiswaController@homepage');
Route::get('/loginregister', 'MahasiswaController@loginregister');
Route::get('/profil/{nim}', 'MahasiswaController@profil');
Route::get('/table', 'MahasiswaController@table');
Route::get('/file', 'MahasiswaController@file');
Route::get('/logout', 'MahasiswaController@logout');


Route::post('/updateProfil', 'MahasiswaController@updateDB');
Route::post('/register', 'MahasiswaController@registerDB');
Route::post('/loginn', 'MahasiswaController@loginDB');
Route::post('/uploadd', 'MahasiswaController@upload');
