<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::post('/home', function () {
//     return view('home');
// });


// Route::get('/products',[ProductController::class,'index']);
// Route::get('/products/create',[ProductController::class,'create']);
// Route::post('/products',[ProductController::class,'store']);
// Route::get('/products/{id}',[ProductController::class,'show']);
// Route::get('/products/{id}/edit',[ProductController::class,'edit']);
// Route::put('/products/{id}',[ProductController::class,'update']);
// Route::delete('/products/{id}',[ProductController::class,'destroy']);


Route::resource('products',ProductController::class);
// Route::resource('products',ProductController::class)->except('index');

