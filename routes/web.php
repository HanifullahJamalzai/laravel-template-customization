<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('landing.home');
});

Route::get('/about', function(){
    return view('landing.about');
});

Route::get('/service', function(){
    return 'service page will be loaded here';
});


