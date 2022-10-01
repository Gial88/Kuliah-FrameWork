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

Route::get('/pzn', function(){
    return "Hello Programmer Zaman Now";
});

Route::redirect('/youtube','/pzn');

Route::fallback(function (){
    return "404";
});

Route::view('/hello', 'hello', ['name' => 'Gial']);

Route::get('/hello-again', function(){
    return view('hello', ['name' => 'Gial']);
});

Route::get('/hello-world', function(){
    return view('hello.world', ['name' => 'Gial']);
});


Route::get('/products/{id}', function($productsId){
    return "Products : ".$productsId;
})->name('product.detail');

Route::get('/products/{product}/items/{item}', function($productsId, $itemId){
    return "Products : ".$productsId. ", Items : ".$itemId;
})->name('product.item.detail');

Route::get('/categories/{id}', function(string $categoryId){
    return "Categories : ".$categoryId;
})->where('id', '[0-9]+')->name('category.detail');

Route::get('/users/{id?}', function(string $userId = '404'){
    return "Users : ".$userId;
})->name('user.detail');

Route::get('/conflict/{name}', function(string $name){
    return "Conflict ".$name;
});

Route::get('/conflict/gial', function(){
    return "Conflict Muhammad Basith Algiffari";
});

Route::get('/produk/{id}',function($id){
    $link = route('product.detail', ['id' =>$id]);
    return "Link : ".$link;
});

Route::get('/produk-redirect/{id}',function($id){
    return redirect()->route('product.detail', ['id' => $id]);
});

Route::get('/controller/hello',[\App\Http\Controllers\HelloController::class, 'hello']);    
Route::get('/controller/hello/{name}',[\App\Http\Controllers\HelloController::class, 'hello']);    
Route::get('/input/hello',[\App\Http\Controllers\InputController::class, 'hello']); 
Route::post('/input/hello',[\App\Http\Controllers\InputController::class, 'hello']); 
Route::post('/input/hello/input',[\App\Http\Controllers\InputController::class, 'helloInput']); 
Route::post('/input/hello/array',[\App\Http\Controllers\InputController::class, 'arrayInput']); 
Route::post('/input/type',[\App\Http\Controllers\InputController::class, 'inputType']);
Route::post('/input/filter/only',[\App\Http\Controllers\InputController::class, 'filterOnly']);
Route::post('/input/filter/expect',[\App\Http\Controllers\InputController::class, 'filterExpect']);
Route::post('/input/filter/merge',[\App\Http\Controllers\InputController::class, 'filterMerge']);
Route::post('/file/upload',[\App\Http\Controllers\InputController::class, 'upload']);
Route::get('/response/hello',[\App\Http\Controllers\ResponseController::class, 'response']); 
Route::get('/response/header',[\App\Http\Controllers\ResponseController::class, 'header']); 
Route::get('/response/type/view',[\App\Http\Controllers\ResponseController::class, 'responseView']); 
Route::get('/response/type/json',[\App\Http\Controllers\ResponseController::class, 'responseJson']); 
Route::get('/response/type/file',[\App\Http\Controllers\ResponseController::class, 'responseFile']); 
Route::get('/response/type/download',[\App\Http\Controllers\ResponseController::class, 'responseDownload']); 
Route::get('/cookie/set',[\App\Http\Controllers\CookieController::class, 'createCookie']); 
Route::get('/cookie/get',[\App\Http\Controllers\CookieController::class, 'getCookie']);  
Route::get('/cookie/clear',[\App\Http\Controllers\CookieController::class, 'clearCookie']);  
