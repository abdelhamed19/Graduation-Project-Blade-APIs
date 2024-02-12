<?php

namespace App\Http\Controllers\front\Home;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('front.home');
    }
    public function exercise(){
        return view('front.exercise');
    }
}
