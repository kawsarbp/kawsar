<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Frontend\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/post', [SiteController::class, 'SinglePost']);

//User Login & Register Route
Route::prefix('user')->name('user.')->group(function () {
    Route::get('/login', [SiteController::class, 'ShowLoginForm'])->name('login-form');
    Route::post('/login', [SiteController::class, 'login'])->name('login');

    Route::post('/logout', [SiteController::class, 'logout'])->name('logout');

    Route::get('/register', [SiteController::class, 'ShowRegisterForm'])->name('register-form');
    Route::post('/register', [SiteController::class, 'registration'])->name('registration');
});
//dashboard
    Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//category
    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::get('/{id}', [CategoryController::class, 'show'])->name('show');
        Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('edit');
        Route::put('/{id}/update', [CategoryController::class, 'update'])->name('update');
        Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('destroy');
    });
//    post
        Route::resource('post',PostController::class);
});
