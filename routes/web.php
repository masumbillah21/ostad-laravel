<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get("/about", [AboutController::class,"index"]);

Route::get("/login/{email}/{password}", [UserController::class,"login"]);
