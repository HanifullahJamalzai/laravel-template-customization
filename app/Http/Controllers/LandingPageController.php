<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{

    public function index(){
        $title = 'Focus On What Matters';
        return view('landing.home')->with('title', $title);
        // return view('landing.home', compact('title'));
        // return view('landing.home', ['title' => 'Focus On What Matters']);
    }

    public function about(){
        return view('landing.about');
    }

}
