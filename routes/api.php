<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// user controller routes
Route::post("register", [AuthenticationController::class, "register"]);

Route::post("login", [AuthenticationController::class, "login"]);

// sanctum auth middleware routes

Route::middleware('auth:api')->group(function() {
    Route::post("logout", [AuthenticationController::class, "logout"]);
    Route::get("user", [AuthenticationController::class, "user"]);
});

Route::resource('users', App\Http\Controllers\API\UserController::class);