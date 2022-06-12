<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;


// Landing page controllers
Route::get('/', [LandingPageController::class, 'index'])->name('home');
Route::get('/about-us', [LandingPageController::class, 'about'])->name('about');

























// Route::get('/', function (){

//     $title = 'Focus On What Matters';
//     return view('landing.home')->with('title', $title);
//     // return view('landing.home', compact('title'));
//     // return view('landing.home', ['title' => 'Focus On What Matters']);
// });

// Route::get('/about-us', function(){
//     return view('landing.about');
// })->name('about');

Route::get('/service', function(){
    return 'service page will be loaded here';
})->name('service');


Route::any('/register', function(){
    return 'login';
    // return view('login');
});

Route::redirect('/click', '/button');

// Route::fallback(function (){
//     return 'This is 404 page';
// });


