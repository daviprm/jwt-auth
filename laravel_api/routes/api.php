<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
Route::get('user', [App\Http\Controllers\AuthController::class, 'user'])->name('user');
