<?php

use Illuminate\Support\Facades\Route;
//controller for admin
use App\Http\Controllers\Admin\CatController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\front\CourseController;
use App\Http\Controllers\Admin\StudentController;
//controller for front
use App\Http\Controllers\Admin\TrainerController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\front\MessageController;
use App\Http\Controllers\Front\HomepageController;
use App\Http\Controllers\Admin\CourseAdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::namespace('Front')->group(function(){
    Route::get('/', [HomepageController::class, 'index'])->name('front.homepage');
    Route::get('/cat/{id}', [CourseController::class, 'cat'])->name('front.cat');
    Route::get('/cat/{id}/course/{c_id}', [CourseController::class, 'show'])->name('front.show');
    Route::get('/contact', [ContactController::class, 'index'])->name('front.contact');
    Route::post('/message/newsletter', [MessageController::class, 'newsletter'])->name('front.message.newsletter');
    Route::post('/message/contact', [MessageController::class, 'contact'])->name('front.message.contact');
    Route::post('/message/enroll', [MessageController::class, 'enroll'])->name('front.message.enroll');
    });

    Route::namespace('Admin')->prefix('dashboard')->group(function(){
        Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
        Route::post('/do-login', [AuthController::class, 'doLogin'])->name('admin.doLogin');
        Route::middleware('adminAuth:admin')->group(function(){
            Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
            Route::get('/', [HomeController::class, 'index'])->name('admin.home');
            //categories
            Route::get('/cats', [CatController::class, 'index'])->name('admin.cats.index');
            Route::get('/cats/create', [CatController::class, 'create'])->name('admin.cats.create');
            Route::post('/cats/store', [CatController::class, 'store'])->name('admin.cats.store');
            Route::get('/cats/edit/{id}', [CatController::class, 'edit'])->name('admin.cats.edit');
            Route::post('/cats/update', [CatController::class, 'update'])->name('admin.cats.update');
            Route::get('/cats/delete/{id}', [CatController::class, 'delete'])->name('admin.cats.delete');
            //trainers
            Route::get('/trainers', [TrainerController::class, 'index'])->name('admin.trainers.index');
            Route::get('/trainers/create', [TrainerController::class, 'create'])->name('admin.trainers.create');
            Route::post('/trainers/store', [TrainerController::class, 'store'])->name('admin.trainers.store');
            Route::get('/trainers/edit/{id}', [TrainerController::class, 'edit'])->name('admin.trainers.edit');
            Route::post('/trainers/update', [TrainerController::class, 'update'])->name('admin.trainers.update');
            Route::get('/trainers/delete/{id}', [TrainerController::class, 'delete'])->name('admin.trainers.delete');

            //courses
            Route::get('/courses', [CourseAdminController::class, 'index'])->name('admin.courses.index');
            Route::get('/courses/create', [CourseAdminController::class, 'create'])->name('admin.courses.create');
            Route::post('/courses/store', [CourseAdminController::class, 'store'])->name('admin.courses.store');
            Route::get('/courses/edit/{id}', [CourseAdminController::class, 'edit'])->name('admin.courses.edit');
            Route::post('/courses/update', [CourseAdminController::class, 'update'])->name('admin.courses.update');
            Route::get('/courses/delete/{id}', [CourseAdminController::class, 'delete'])->name('admin.courses.delete');

            //students
            Route::get('/students', [StudentController::class, 'index'])->name('admin.students.index');
            Route::get('/students/create', [StudentController::class, 'create'])->name('admin.students.create');
            Route::post('/students/store', [StudentController::class, 'store'])->name('admin.students.store');
            Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('admin.students.edit');
            Route::post('/students/update', [StudentController::class, 'update'])->name('admin.students.update');
            Route::get('/students/delete/{id}', [StudentController::class, 'delete'])->name('admin.students.delete');
            Route::get('/students/show-courses/{id}', [StudentController::class, 'showCourses'])->name('admin.students.showCourses');


        });

    });
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth'])->name('dashboard');
