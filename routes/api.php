<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::group(['middleware' => 'auth:sanctum'], function (){
    Route::apiResource('posts', PostController::class);
});
