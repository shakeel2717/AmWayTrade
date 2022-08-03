<?php

use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\PlanController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::prefix('user/')->middleware('auth', 'user')->name('user.')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('plans', PlanController::class);
});

require __DIR__ . '/auth.php';
