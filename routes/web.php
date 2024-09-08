<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\FrontMenuController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Website\WebsiteController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[WebsiteController::class,'index'])->name('home');
Route::get('/about',[WebsiteController::class,'about'])->name('about');
Route::get('/services',[WebsiteController::class,'services'])->name('services');
Route::get('/blog',[WebsiteController::class,'blog'])->name('blog');
Route::get('/contact',[WebsiteController::class,'contact'])->name('contact');

Auth::routes();



Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home.admin');
    Route::resource('front-menu', FrontMenuController::class);

    Route::get('service/add',[ServiceController::class,'index'])->name('service');
    Route::post('service/store',[ServiceController::class,'store'])->name('service.store');
    Route::get('service/show',[ServiceController::class,'show'])->name('service.show');
    Route::get('service/edit/{slug}',[ServiceController::class,'edit'])->name('service.edit');
    Route::post('service/update/{slug}',[ServiceController::class,'update'])->name('service.update');
    Route::get('service/delete/{slug}',[ServiceController::class,'destroy'])->name('service.destroy');
    

    Route::get('user',[UserController::class,'index'])->name('user.create');
    Route::get('user/show',[UserController::class,'show'])->name('user.show');
    Route::get('user/edit',[UserController::class,'edit'])->name('user.edit');
    Route::get('user/destroy',[UserController::class,'destroy'])->name('user.destroy');
});


