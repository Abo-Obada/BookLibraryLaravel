<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function (){
Route::get('me', [UserController::class,'me']);
Route::post('logout',[UserController::class,'logout']);

});
Route::post('login',[UserController::class,'login']);
Route::get('bookcover',[BookController::class, 'getAllBooks']);
