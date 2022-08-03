<?php

use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\PlanController;
use App\Http\Controllers\user\ProfileController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::prefix('user/')->middleware('auth', 'user')->name('user.')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('plans', PlanController::class);
    Route::get('/profile/change-passwor', [ProfileController::class, "changePassword"])->name("profile.change.password");
    Route::post('/profile/change-passwor', [ProfileController::class, "updatePassword"])->name("profile.password.update");
    Route::resource('profile', ProfileController::class);
});

require __DIR__ . '/auth.php';
