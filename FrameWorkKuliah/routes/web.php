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
// Route::get('/cookie/set',[\App\Http\Controllers\CookieController::class, 'createCookie']); 
// Route::get('/cookie/get',[\App\Http\Controllers\CookieController::class, 'getCookie']);  
// Route::get('/cookie/clear',[\App\Http\Controllers\CookieController::class, 'clearCookie']);  
Route::get('/redirect/to',[\App\Http\Controllers\RedirectController::class, 'redirectTo']);  
Route::get('/redirect/from',[\App\Http\Controllers\RedirectController::class, 'redirectFrom']);  
Route::get('/redirect/name',[\App\Http\Controllers\RedirectController::class, 'redirectName']);  
Route::get('/redirect/name/{name}',[\App\Http\Controllers\RedirectController::class, 'redirectHello'])
    ->name('redirect-hello');  
Route::get('/redirect/action',[\App\Http\Controllers\RedirectController::class, 'redirectAction']);  
Route::get('/redirect/pzn',[\App\Http\Controllers\RedirectController::class, 'redirectAway']); 
// Route::get('/middleware/api', function(){
//     return "OK";
// })->middleware(['Test:PZN,401']);
Route::post('/file/upload', [\App\Http\Controllers\InputController::class, 'upload'])
    ->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);
Route::get('/form',[\App\Http\Controllers\InputController::class,'form']);
Route::post('/form',[\App\Http\Controllers\InputController::class,'submitForm']);
Route::prefix('/response/type')->group(function(){
    Route::get('/view',[\App\Http\Controllers\ResponseController::class, 'responseView']); 
    Route::get('/json',[\App\Http\Controllers\ResponseController::class, 'responseJson']); 
    Route::get('/file',[\App\Http\Controllers\ResponseController::class, 'responseFile']); 
    Route::get('/download',[\App\Http\Controllers\ResponseController::class, 'responseDownload']); 
});
Route::middleware(['Test:PZN,401'])->group(function(){
    Route::get('/middleware/api', function(){
        return "OK";
    });
});
Route::controller(\App\Http\Controllers\CookieController::class)->group(function (){
    Route::get('/cookie/set',[\App\Http\Controllers\CookieController::class, 'createCookie']); 
    Route::get('/cookie/get',[\App\Http\Controllers\CookieController::class, 'getCookie']);  
    Route::get('/cookie/clear',[\App\Http\Controllers\CookieController::class, 'clearCookie']); 
});
Route::middleware(['Test:PZN,401'])->prefix('/middleware')->group(function(){
    Route::get('/api', function(){
        return "OK";
    });
});
Route::get('/url/current', function(){
    return \Illuminate\Support\Facades\URL::full();
}); 
Route::get('/url/named', function(){
    return route('redirect-hello', ['name' => 'Eko']);
});
Route::get('/url/action', function (){
    return action([\App\Http\Controllers\InputController::class,'form'], []);
});
Route::get('/session/create',[\App\Http\Controllers\SessionController::class, 'createSession']);
Route::get('/session/get',[\App\Http\Controllers\SessionController::class, 'getSession']);
Route::get('/error/sample', function(){
    throw new Exception("Sample Error");
});
Route::get('/error/manual', function(){
    report(new Exception("Sample Error"));
    return "OK";
});
Route::get('/error/validation', function(){
    throw new \App\Exceptions\ValidationException("Validation Error");
});
Route::get('/abort/400', function(){
    abort(400);
});
Route::get('/abort/401', function(){
    abort(401);
});
Route::get('/abort/500', function(){
    abort(500);
});
