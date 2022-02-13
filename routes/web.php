<?php

use App\Http\Controllers\Frontend\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SiteController::class,'index'])->name('home');
Route::get('/post', [SiteController::class,'SinglePost']);

//User Login & Register Route
Route::prefix('user')->name('user.')->group(function (){
    Route::get('/login',[SiteController::class,'ShowLoginForm'])->name('login-form');
    Route::post('/login',[SiteController::class,'login'])->name('login');

    Route::get('/logout',[SiteController::class,'logout'])->name('logout');

    Route::get('/register',[SiteController::class,'ShowRegisterForm'])->name('register-form');
    Route::post('/register',[SiteController::class,'registration'])->name('registration');

});
