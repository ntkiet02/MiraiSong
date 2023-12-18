<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beat;
use App\Models\TypeBeat;
use App\Models\Rapper;
use Illuminate\Support\Facades\Auth;
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
        $typebeat= TypeBeat::all();
        $beat=Beat::all();
        return view('frontend.home', compact('typebeat'), compact('beat'));
    }
    public function getBeat($typename_slug='')
    { 

        return view('frontend.beat');
    }
    public function getBeatDetail($typename_slug='', $beatname_slug='')
    { 

        return view('frontend.beatdetail');
    }
    public function getViewProject($name='')
    {
        return view('frontend.viewproject');
    }
    public function getViewProjectDetail($name='',$nameprojectdetail='')
    {
        return view('frontend.viewprojectdetail');
    }
    public function getRegister()
    {
        return view('user.register');
    }
    public function getLogin()
    {
        return view('user.login');
    }
  

}
