<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     if (Auth::user()->code != '008') {
//         return redirect()->route('admin.dashboard');
//     } else{
//         return  redirect()->route('user.dashboard');
//     }
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('user')->middleware(['auth', 'user'])->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/welcome', [HomeController::class, 'index'])->name('welcome');
    Route::get('/create_course', [CourseController::class, 'course'])->name('create_course');
    Route::get('/course.store', [CourseController::class, 'store'])->name('course.store');
    Route::post('/course.store', [CourseController::class, 'store'])->name('course.store');
    Route::post('/addcategory', [CategoryController::class, 'addcategoryview'])->name('addcategory');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
