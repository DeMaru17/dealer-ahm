<?php

use Illuminate\Support\Facades\Route;

// Default route
Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index']);
