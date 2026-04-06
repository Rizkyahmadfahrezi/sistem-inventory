<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;    
use Illuminate\Container\Attributes\Auth;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', [AuthController::class, 'index']);
Route::post('Login', [AuthController::class, 'Login'])->name('Login');

// Route validationn Role
Route::get('/Admin-Dashboard', [AdminController::class, 'index'])
    ->middleware('auth')
    ->name('Admin-Dashboard');
// Route::get('/User-Dashboard', [AuthController::class, 'index'])->name('User-Dashboard')->middleware('auth');
