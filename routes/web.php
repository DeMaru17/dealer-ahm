<?php

use App\Http\Middleware\CheckAuth;
use Illuminate\Support\Facades\Route;





// Default routes
Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

// Dashboard  routes
Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index']);
Route::get('Motor/{nama_motor}/detail', [\App\Http\Controllers\DashboardController::class, 'detail'])->name('Motor.detail');


// Login routes
Route::get('login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');

// logout routes
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

// middleware group
Route::middleware([CheckAuth::class])->group(function () {
    // motor routes
    Route::resource('motor', \App\Http\Controllers\MotorController::class);
    // gambar motor routes
    Route::resource('gambar-motor', \App\Http\Controllers\GambarMotorController::class);
    // dimensi motor routes
    Route::resource('dimensi',  \App\Http\Controllers\DimensiMotorController::class);
    // spesifikasi mesin motor routes
    Route::resource('mesin', \App\Http\Controllers\MesinMotorController::class);
    // rangka routes
    Route::resource('rangka', \App\Http\Controllers\RangkaController::class);
    // Kapasitas routes
    Route::resource('kapasitas', \App\Http\Controllers\KapasitasController::class);
    // kelistrikan routes
    Route::resource('kelistrikan', \App\Http\Controllers\KelistrikanController::class);
    // series motor routes
    Route::resource('series',  \App\Http\Controllers\SeriesMotorController::class);
});
Route::get('get-motor-by-kategori', [\App\Http\Controllers\GambarMotorController::class, 'getMotorByKategori'])->name('get-motor-by-kategori');
