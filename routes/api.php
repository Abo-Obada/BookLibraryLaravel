<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function (){
Route::get('me', [UserController::class,'me']);
Route::post('logout',[UserController::class,'logout']);
Route::post('createcomment/{uuid}',[BookController::class,'createComment']);
Route::put('createreaction/{uuid}',[BookController::class,'createReaction']);
});
Route::post('login',[UserController::class,'login']);
Route::post('login_api',[UserController::class,'loginApi']);
Route::get('bookcover',[BookController::class, 'getAllBooks']);
Route::get('bookcategory',[BookController::class,'categorizeBook']);
Route::get('category',[BookController::class,'getCategory']);
Route::get('author',[BookController::class,'getAuthor']);
Route::get('test',[BookController::class,'getBookCover']);
Route::get('showBook/{uuid}',[BookController::class,'getBook']);
Route::get('comments/{uuid}',[BookController::class,'getComment']);
