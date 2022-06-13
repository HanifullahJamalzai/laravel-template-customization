<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class LandingPageController extends Controller
{

    public function index(){
        
        $services = Service::all();
        $title = 'Focus On What Matters';
        return view('landing.home')->with('title', $title)->with('services', $services);
        
        // return view('landing.home', compact('title'));
        // return view('landing.home', ['title' => 'Focus On What Matters']);
    }

    public function about(){
        return view('landing.about');
    }

}
