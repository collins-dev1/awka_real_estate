<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Landing Pages
Route::get('about', [LandingPageController::class, 'about'])->name('about');
Route::get('contact', [LandingPageController::class, 'contact'])->name('contact');
Route::get('features', [LandingPageController::class, 'features'])->name('features');
Route::get('verify_agent', [LandingPageController::class, 'verify_agent'])->name('verify_agent');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
