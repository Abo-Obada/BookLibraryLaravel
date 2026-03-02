<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', [UserController::class,'user'])->middleware('auth:sanctum');
Route::post('login',[UserController::class,'login']);
Route::post('logout',[UserController::class,'logout']);