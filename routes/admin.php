<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::redirect('/admin', '/admin/dashboard');

Route::prefix('admin/')->middleware('auth', 'admin', 'verified')->name('admin.')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('setting', SettingController::class);
});
