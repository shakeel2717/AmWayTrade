<?php

use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::redirect('/admin', '/admin/dashboard');

Route::prefix('admin/')->middleware('auth', 'admin')->name('admin.')->group(function () {
    Route::resource('dashboard', DashboardController::class);
});
