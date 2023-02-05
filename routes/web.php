<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/privacy', [LandingPageController::class, 'privacy'])->name('landing.privacy');
Route::resource('/', LandingPageController::class);

Route::prefix('user/')->middleware('auth', 'user')->name('user.')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('security', SecurityController::class);
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
