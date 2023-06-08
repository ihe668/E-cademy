<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\CourseContent\CoursecontentController;

Route::prefix('admin')->middleware('auth','admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/addcategory/view', [CategoryController::class, 'addcategoryview'])->name('admin.addcategory.view');
    Route::post('/addcategory', [CategoryController::class, 'addcategory'])->name('admin.addcategory');

    Route::get('/addcoursecontent/view', [CoursecontentController::class, 'addcoursecontentview'])->name('admin.addcoursecontent.view');
    Route::post('/addcoursecontent', [CoursecontentController::class, 'addcoursecontent'])->name('admin.addcoursecontent');

});


