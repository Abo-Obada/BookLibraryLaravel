<?php

use App\Http\Controllers\Admins\AdminController;
use App\Http\Controllers\Admins\BookAdminController;
use App\Http\Controllers\Admins\RoleController;
use App\Http\Controllers\User\BookController;
use App\Http\Controllers\User\UserController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix("user")->group( function(){


    Route::middleware('auth:sanctum')->group(function (){
        Route::post('logout',[UserController::class,'logout']);
        Route::post('createcomment/{uuid}',[BookController::class,'createComment']);
        Route::put('createreaction/{uuid}',[BookController::class,'createReaction']);
        Route::get('me', [UserController::class,'me']);
        Route::get('routes',[UserController::class,'displayRoutes']);
    });

    Route::post('login',[UserController::class,'login']);
    Route::post('login_api',[UserController::class,'loginApi']);
    Route::get('bookcover',[BookController::class, 'getAllBooks']);
    Route::get('bookcategory',[BookController::class,'categorizeBook']);
    Route::get('category',[BookController::class,'getCategory']);
    Route::get('author',[BookController::class,'getAuthor']);
    //Route::get('test',[BookController::class,'getBookCover']);
    Route::get('showBook/{uuid}',[BookController::class,'getBook']);
    Route::get('comments/{uuid}',[BookController::class,'getComment']);
    Route::get('carousel',[BookController::class,'getCarousel']);
});


Route::prefix("admin")->group(function (){

    Route::middleware(['auth:sanctum','middlewarePermission'])->group(function (){
        Route::get('me',[AdminController::class,'me']);
        Route::get('getrole',[RoleController::class,'get']);
        Route::post('storerole',[RoleController::class,'store']);
    });

    Route::post('login',[AdminController::class,'login']);
});
