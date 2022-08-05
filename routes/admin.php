<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\FinanceController;
use App\Http\Controllers\admin\HistoryController;
use App\Http\Controllers\admin\KycController;
use App\Http\Controllers\admin\SupportController;
use Illuminate\Support\Facades\Route;

Route::redirect('/admin', '/admin/dashboard');

Route::prefix('admin/')->middleware('auth', 'admin')->name('admin.')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('finance', FinanceController::class);
    Route::resource('support', SupportController::class);
    Route::resource('kyc', KycController::class);
    Route::prefix("history")->name("history.")->controller(HistoryController::class)->group(function () {
        Route::get('users', 'users')->name("users");
        Route::get('deposits', 'deposit')->name("deposits");
        Route::get('withdraws', 'withdraws')->name("withdraws");
        Route::get('withdraws/pending', 'withdrawsPending')->name("withdraws.pending");
        Route::get('direct', 'direct')->name("direct");
        Route::get('level1', 'level1')->name("level1");
        Route::get('level2', 'level2')->name("level2");
        Route::get('level3', 'level3')->name("level3");
        Route::get('support', 'support')->name("support");
    });

    Route::prefix("admin")->name("admin.")->controller(AdminController::class)->group(function () {
        Route::get('clean', 'clean')->name("clean");
        Route::get('blockchain', 'blockchain')->name("blockchain");
    });
});
