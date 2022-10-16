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
    return view('welcome');
});

//route CRUD
Route::get('/menu','App\Http\Controllers\MenuController@index');
Route::get('/menu/tambah','App\Http\Controllers\MenuController@tambah');
Route::post('/menu/store','App\Http\Controllers\MenuController@store');
Route::get('/menu/edit/{id}','App\Http\Controllers\MenuController@edit');
Route::post('/menu/update','App\Http\Controllers\MenuController@update');
Route::get('/menu/hapus/{id}','App\Http\Controllers\MenuController@hapus');