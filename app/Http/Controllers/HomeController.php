<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */ 
    
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
        // Code trên yêu cầu đăng nhập
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getHome()
    {
        return view('home');
    }
}