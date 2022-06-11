<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return 'about page is here';
});



// optional parameter
Route::get('/product/{id?}', function($id = null){
    return 'testmessage '.$id;
});

// Require parameter
Route::get('/require/{id}', function($id){
    return 'required id is '.$id;
});

// Route::match(['get', 'post'], '/test', function(){
//     return 'I am match verb';
// });


// Route::any('/test', function(){
//     return 'I am any route';
// });

Route::get('/home', function(){  
    $data = ['data1', 'data2','data3'];

    return view('home')->with('data', $data);
    // return view('home', compact('data'));
    // return view('home', ['data' => ['data1', 'data2','data3']]);
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/service', function(){
    return view('home');
});

Route::get('/info', function(){
    return view('info');
});

Route::get('/test', function(){
    return view('home');
});