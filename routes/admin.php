<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AnnouncementController;
use App\Http\Controllers\Admin\AssignmentController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CoursecontentController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\QuizController;
use App\Http\Controllers\Admin\SettingsController;

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    // Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin.search.course', [AdminController::class, 'search'])->name('admin.search.course');

    Route::get('/addcategory/view', [CategoryController::class, 'addcategoryview'])->name('admin.addcategory.view');
    Route::post('/addcategory', [CategoryController::class, 'addcategory'])->name('admin.addcategory');
    Route::get('/editcategory/{category}', [CategoryController::class, 'editcategory'])->name('admin.editcategory');
    Route::post('/update.category/{category}', [CategoryController::class, 'update'])->name('update.category');
    Route::get('/delete.category/{category}', [CategoryController::class, 'delete'])->name('delete.category');
    Route::post('/search.category', [CategoryController::class, 'search'])->name('search.category');
    Route::get('/appcourseview', [CategoryController::class, 'view'])->name('app.course.view');

    Route::get('/addcoursecontent/view', [CoursecontentController::class, 'addcoursecontentview'])->name('admin.addcoursecontent.view');
    Route::post('/addcoursecontent', [CoursecontentController::class, 'addcoursecontent'])->name('admin.addcoursecontent');

    Route::get('/create_course', [CourseController::class, 'course'])->name('create_course');
    Route::post('/course.store', [CourseController::class, 'store'])->name('course.store');
    Route::get('/courses/view', [CourseController::class, 'admincoursesview'])->name('admin.courses.view');
    Route::get('/course_details/{course}', [CourseController::class, 'details'])->name('course_details');
    Route::get('/editcourse/{course}', [CourseController::class, 'edit'])->name('admin.edit.course');
    Route::post('/updatecourse/{course}', [CourseController::class, 'update'])->name('admin.update.course');
    Route::get('/deletecourse/{course}', [CourseController::class, 'delete'])->name('admin.delete.course');


    Route::get('/profile', [AdminController::class, 'adminprofile'])->name('admin.profile');
    Route::post('/updateprofile', [AdminController::class, 'updateprofile'])->name('admin.update.profile');

    Route::get('/settings', [SettingsController::class, 'settingsview'])->name('admin.settings.view');

    Route::get('/announcements', [AnnouncementController::class, 'announcementsview'])->name('admin.announcement');
    Route::get('/addannouncement/view', [AnnouncementController::class, 'addannouncementview'])->name('admin.addannouncement.view');
    Route::post('/addannouncement', [AnnouncementController::class, 'addannouncement'])->name('admin.addannouncement');

    Route::get('/assignment', [AssignmentController::class, 'assignmentview'])->name('admin.assignments.view');
    Route::get('/addassignment/view', [AssignmentController::class, 'addassignmentview'])->name('admin.addassignment.view');
    Route::post('/addassignment', [AssignmentController::class, 'addassignment'])->name('admin.addassignment');

    Route::get('/setquestion/view/{exam}', [QuizController::class, 'setquestionsview'])->name('admin.setquestion.view');
    Route::get('/setquiz/view', [QuizController::class, 'setquizview'])->name('admin.setquiz.view');
    Route::post('/addquestion', [QuizController::class, 'addquestion'])->name('admin.addquestion');
    Route::post('/addquiz', [QuizController::class, 'addquiz'])->name('admin.addquiz');
});
