<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use App\Models\Course;
use App\Models\Enrollment;
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
    $courses = Course::get()->all();
    return view('welcome', compact('courses'));
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
    Route::post('/updateprofile', [UserController::class, 'updateprofile'])->name('user.update.profile');

    Route::get('/courses/view', [CourseController::class, 'usercoursesview'])->name('user.courses.view');
    Route::get('/coursesdetails/view/{course}', [CourseController::class, 'usercoursedetailsview'])->name('user.coursedetails.view');

    Route::get('/settings', [SettingsController::class, 'usersettingsview'])->name('user.settings');

    Route::get('/checkout/{course}', [PaymentController::class, 'checkoutview'])->name('user.checkout');
    Route::post('/pay/{properties}', [PaymentController::class, 'redirectToGateway'])->name('pay');
    Route::get('/payment/callback/{properties}', [PaymentController::class, 'handleGatewayCallback'])->name('payfor');

    Route::get('/enrollmenthistory', [EnrollmentController::class, 'userenrollmenthistory'])->name('user.enrollmenthistory');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/welcome', [HomeController::class, 'index'])->name('welcome');
    Route::get('/view_course', [HomeController::class, 'view'])->name('view_course');
    Route::post('/home.search', [HomeController::class, 'search'])->name('home.search');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
