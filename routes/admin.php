<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CoursecontentController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\SettingsController;

Route::prefix('admin')->middleware(['auth','admin'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/addcategory/view', [CategoryController::class, 'addcategoryview'])->name('admin.addcategory.view');
    Route::post('/addcategory', [CategoryController::class, 'addcategory'])->name('admin.addcategory');

    Route::get('/addcoursecontent/view', [CoursecontentController::class, 'addcoursecontentview'])->name('admin.addcoursecontent.view');
    Route::post('/addcoursecontent', [CoursecontentController::class, 'addcoursecontent'])->name('admin.addcoursecontent');

    Route::get('/create_course', [CourseController::class, 'course'])->name('create_course');
    Route::post('/course.store', [CourseController::class, 'store'])->name('course.store');
    Route::get('/courses/view', [CourseController::class, 'admincoursesview'])->name('admin.courses.view');

    Route::get('/profile', [AdminController::class, 'adminprofile'])->name('admin.profile');
    Route::post('/updateprofile', [AdminController::class, 'updateprofile'])->name('admin.update.profile');

    Route::get('/settings', [SettingsController::class, 'settingsview'])->name('admin.settings.view');
});


