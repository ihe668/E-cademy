<?php

use App\Http\Controllers\Admin\AdminController;

Route::prefix('admin')->middleware('auth','admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
});


