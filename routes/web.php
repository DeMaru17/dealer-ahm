<?php

use App\Http\Middleware\CheckAuth;
use Illuminate\Support\Facades\Route;




// Default routes
Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index']);

// Dashboard  routes
Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);

// Login routes
Route::get('login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');

// logout routes
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

// middleware group
Route::middleware([CheckAuth::class])->group(function () {
    // motor routes
    Route::resource('motor', \App\Http\Controllers\MotorController::class);
});
