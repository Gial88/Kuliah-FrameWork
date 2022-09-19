<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/halo', function(){
    return'Selamat Datang';
});

Route::get('/blog', function(){
    return view('blog');
});


Route::get('/dosen', 'App\Http\Controllers\DosenController@index');
Route::resource('products', ProductController::class);