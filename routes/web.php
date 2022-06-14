<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;


// Landing page controllers
Route::get('/', [LandingPageController::class, 'index'])->name('home');
Route::get('/about-us', [LandingPageController::class, 'about'])->name('about');
Route::get('/service', [LandingPageController::class, 'service'])->name('service');
