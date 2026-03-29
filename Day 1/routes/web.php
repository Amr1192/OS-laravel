<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::post('/home', function () {
//     return view('home');
// });


Route::get('/',[ProductController::class,'index']);

// Route::get('/',fn()=> view('welcome'));
Route::get('/home',fn()=> view('home'));
