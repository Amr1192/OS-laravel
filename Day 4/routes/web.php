<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('templete');
});
Route::post('/home', function () {
    return view('home');
});


// Route::get('/products',[ProductController::class,'index']);
// Route::get('/products/create',[ProductController::class,'create']);
// Route::post('/products',[ProductController::class,'store']);
// Route::get('/products/{id}',[ProductController::class,'show']);
// Route::get('/products/{id}/edit',[ProductController::class,'edit']);
// Route::put('/products/{id}',[ProductController::class,'update']);
// Route::delete('/products/{id}',[ProductController::class,'destroy']);


Route::resource('products',ProductController::class);
// Route::resource('products',ProductController::class)->except('index');



//Authentication
Route::get('/register',[AuthController::class,'showRegister'])->name('showRegister')->middleware('auth');
Route::post('/register',[AuthController::class,'register'])->name('register');
//Authentication
Route::get('/login',[AuthController::class,'showLogin'])->name('showLogin')->middleware('guest');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');


// Grouping by controller and middleware

// Route::middleware('auth')->controller(AuthController::class)->group(function() {
//     Route::get('/login','showLogin')->name('showLogin')->middleware('guest');
// Route::post('/login','login')->name('login');
// Route::post('/logout','logout')->name('logout');
// });


Route::get('/order/{order}',[OrderController::class,'show'])->middleware('auth');