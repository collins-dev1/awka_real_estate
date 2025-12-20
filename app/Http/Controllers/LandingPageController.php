<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //
    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function features(){
        return view('features');
    }

    public function verify_agent(){
        return view('verify_agent');
    }
}
