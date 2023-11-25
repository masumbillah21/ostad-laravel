<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get("/single", SingleActionController::class);

Route::middleware(['isAdmin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/admin/user-list', [AdminController::class, 'userList']);
    Route::get('/admin/user-role', [AdminController::class, 'userRole']);
    Route::get('/admin/profile', [AdminController::class, 'profile']);
});

Route::middleware(['isUser'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'dashboard']);
    Route::get('/user/tasks', [UserController::class, 'tasks']);
    Route::get('/user/profile', [UserController::class, 'profile']);
});