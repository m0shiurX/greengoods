<?php
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::get('/products', [ProductController::class, 'index']);
// Route::get('/products/{id}', [ProductController::class, 'show']); 
// Route::get('/products', [ProductController::class, 'store']); 
// Route::get('/products/search/{name}', [ProductController::class, 'search']);


Route::resource('products', ProductController::class);


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/products/search/{name}', [ProductController::class, 'search']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});