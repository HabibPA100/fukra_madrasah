<?php

use App\Http\Controllers\Frontend\Admin\AdminPostController;
use App\Http\Controllers\Frontend\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/user-list', [DashboardController::class, 'user'])->name('admin.user-list');
});