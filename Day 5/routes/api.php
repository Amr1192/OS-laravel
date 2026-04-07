<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


//all routes here prefix /api

// Route::prefix('os')->group(function() {

// });
Route::get('/',[UserController::class,'index'])->middleware("auth:sanctum");

Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);
Route::post('/logout',[UserController::class,'logout'])->middleware("auth:sanctum");
Route::get('/os',[UserController::class,'os'])->middleware("auth:sanctum");