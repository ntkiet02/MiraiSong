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
        
        return view('frontend.home');
    }
    public function getBeat()
    {
        $beat= Beat::all();
        $typebeat = TypeBeat::all();     
        return view('frontend.beat', compact('beat'), compact('typebeat'));
    }
    // public function getBeat($typename_slug='')
    // { 

    //     return view('frontend.beat');
    // }
    public function getWriteRap()
    {
        if(Auth::check())
            return view('frontend.writerap');
        else
            return redirect()->route('frontend.writerap');
    }
    public function postWriteRap()
    {
        
        return redirect()->route('frontend.writerapsuccess');
    }
    public function getWriteRapSuccess()
    {
        return view ('rapper.writerapsuccess');
    }
    public function getRegister()
    {
        return view('user.register');
    }public function getLogin()
    {
        return view('user.login');
    }

}
