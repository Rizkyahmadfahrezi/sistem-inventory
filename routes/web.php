<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index']);
Route::post('Login', [AuthController::class, 'Login'])->name('Login');
Route::post('logout',[AuthController::class,'logout'])->name('logout');

// Route validationn Role
Route::get('/Admin-Dashboard', [AdminController::class, 'index'])
    ->middleware('auth')
    ->name('Admin-Dashboard');
Route::get('/User-Dashboard', [AdminController::class, 'index'])->name('User-Dashboard')->middleware('auth');

