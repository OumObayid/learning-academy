<?php

use Illuminate\Support\Facades\Route;
//controller for admin
use App\Http\Controllers\Admin\CatController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\front\CourseController;
use App\Http\Controllers\Admin\SettingController;
//controller for front
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TrainerController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\front\MessageController;
use App\Http\Controllers\Front\HomepageController;
use App\Http\Controllers\Admin\CourseAdminController;
use App\Http\Controllers\Admin\SiteContentController;
use App\Http\Controllers\Admin\MessageAdminController;
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
    //Front
    Route::namespace('Front')->group(function(){
        Route::get('/', [HomepageController::class, 'index'])->name('front.homepage');
        Route::get('/cat/{id}', [CourseController::class, 'cat'])->name('front.cat');
        Route::get('/course/{id}', [CourseController::class, 'show'])->name('front.show');
        Route::get('/contact', [ContactController::class, 'index'])->name('front.contact');
        Route::post('/Admin/newsletter', [MessageController::class, 'newsletter'])->name('front.message.newsletter');
        Route::post('/message/contact', [MessageController::class, 'contact'])->name('front.message.contact');
        Route::post('/message/enroll', [MessageController::class, 'enroll'])->name('front.message.enroll');
    });

    //Admin
    Route::namespace('Admin')->prefix('dashboard')->group(function(){

        //login
        Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
        Route::post('/do-login', [AuthController::class, 'doLogin'])->name('admin.doLogin');

        //Dashboard
        Route::middleware('adminAuth:admin')->group(function(){
            //log out
            Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
            //Admin home
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

            //student courses
            Route::get('/students/show-courses/{id}', [StudentController::class, 'showCourses'])->name('admin.students.showCourses');
            Route::get('/students/{id}/add-to-course', [StudentController::class, 'addCourse'])->name('admin.students.addCourse');
            Route::post('/students/{id}/storeCourse', [StudentController::class, 'storeCourse'])->name('admin.students.storeCourse');
            Route::get('/students/{id}/courses/{c_id}/approve', [StudentController::class, 'approveCourse'])->name('admin.students.approveCourse');
            Route::get('/students/{id}/courses/{c_id}/reject', [StudentController::class, 'rejectCourse'])->name('admin.students.rejectCourse');
            Route::get('/students/{id}/courses/{c_id}/delete', [StudentController::class, 'deleteCourse'])->name('admin.students.deleteCourse');

            //messages
            Route::get('/messages', [MessageAdminController::class, 'index'])->name('admin.messages.index');
            Route::get('/messages/edit/{id}', [MessageAdminController::class, 'edit'])->name('admin.messages.edit');
            Route::post('/messages/update', [MessageAdminController::class, 'update'])->name('admin.messages.update');
            Route::get('/messages/delete/{id}', [MessageAdminController::class, 'delete'])->name('admin.messages.delete');
            Route::get('/messages/show-message/{id}', [MessageAdminController::class, 'showMessage'])->name('admin.messages.showMessage');

            //setting
            Route::get('/setting', [SettingController::class, 'index'])->name('admin.setting.index');
            Route::get('/setting/edit', [SettingController::class, 'edit'])->name('admin.setting.edit');
            Route::post('/setting/update', [SettingController::class, 'update'])->name('admin.setting.update');

            //site content
            Route::get('/siteContent', [SiteContentController::class, 'index'])->name('admin.siteContent.index');
            Route::get('/siteContent/edit', [SiteContentController::class, 'edit'])->name('admin.siteContent.edit');
            Route::post('/siteContent/update', [SiteContentController::class, 'update'])->name('admin.siteContent.update');

        });

    });
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth'])->name('dashboard');
