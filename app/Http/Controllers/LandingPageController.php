<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Team;
use App\Models\Setting;

class LandingPageController extends Controller
{

    public function index(){
        $setting = Setting::first();
        $services = Service::all();

        $title = 'Focus On What Matters';
        return view('landing.home')
                    ->with('title', $title)
                    ->with('services', $services)
                    ->with('setting', $setting);
        
        // return view('landing.home', compact('title'));
        // return view('landing.home', ['title' => 'Focus On What Matters']);
    }

    public function about(){
        $teams = Team::all();
        // $teams = [];
        // die and dump
        // dd($teams);
        $setting = Setting::first();

        return view('landing.about')
                    ->with('teams', $teams)
                    ->with('setting', $setting);
    }


    public function service(){
        $data = Service::all();
        $setting = Setting::first();

        return view('landing.service')
                    ->with('data', $data)
                    ->with('setting', $setting);
    }

}
