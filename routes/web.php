<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Front\CourseController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\front\MessageController;
use App\Http\Controllers\Front\HomepageController;
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
    Route::get('/course/{c_id}', [CourseController::class, 'show'])->name('front.show');
    Route::get('/contact', [ContactController::class, 'index'])->name('front.contact');
    Route::post('/message/newsletter', [MessageController::class, 'newsletter'])->name('front.message.newsletter');
    Route::post('/message/contact', [MessageController::class, 'contact'])->name('front.message.contact');
    Route::post('/message/enroll', [MessageController::class, 'enroll'])->name('front.message.enroll');

});

Route::namespace('Front')->prefix('dashboard')->group(function(){
    Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('/do-login', [AuthController::class, 'doLogin'])->name('admin.doLogin');
    Route::middleware('adminAuth->admin')->group(function(){
        Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
        Route::get('/', [HomeController::class, 'index'])->name('admin.home');
    });


});
