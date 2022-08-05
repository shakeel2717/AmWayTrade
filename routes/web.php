<?php

use App\Http\Controllers\DepositController;
use App\Http\Controllers\KycController;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\HistoryController;
use App\Http\Controllers\user\PlanController;
use App\Http\Controllers\user\ProfileController;
use App\Http\Controllers\user\SupportController;
use App\Http\Controllers\WithdarwController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::prefix('user/')->middleware('auth', 'user')->name('user.')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('plans', PlanController::class);
    Route::get('/profile/change-passwor', [ProfileController::class, "changePassword"])->name("profile.change.password");
    Route::post('/profile/change-passwor', [ProfileController::class, "updatePassword"])->name("profile.password.update");
    Route::resource('profile', ProfileController::class);
    Route::resource('deposit', DepositController::class);
    Route::resource('withdraw', WithdarwController::class);
    Route::resource('support', SupportController::class);
    Route::resource('kyc', KycController::class);
    Route::prefix("history")->name("history.")->controller(HistoryController::class)->group(function () {
        Route::get('recent', 'recent')->name("recent");
        Route::get('deposit', 'deposit')->name("deposit");
        Route::get('withdraw', 'withdraw')->name("withdraw");
        Route::get('direct', 'direct')->name("direct");
        Route::get('level1', 'level1')->name("level1");
        Route::get('level2', 'level2')->name("level2");
        Route::get('level3', 'level3')->name("level3");
        Route::get('support', 'support')->name("support");
        Route::get('passive/1', 'passiveLevel1')->name("passive.1");
        Route::get('passive/2', 'passiveLevel2')->name("passive.2");
        Route::get('passive/3', 'passiveLevel3')->name("passive.3");
        Route::get('passive/4', 'passiveLevel4')->name("passive.4");
        Route::get('passive/5', 'passiveLevel5')->name("passive.5");
        Route::get('profit', 'profit')->name("profit");
        Route::get('tree/{user?}', 'tree')->name("tree");
    });
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
