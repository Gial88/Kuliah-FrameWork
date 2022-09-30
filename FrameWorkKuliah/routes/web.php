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