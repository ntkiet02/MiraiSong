<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beat;
use App\Models\Musician;
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
        $typebeat=TypeBeat::all();
        $musician=Musician::all();
        $beat=Beat::all();
        // return view('frontend.home' ,  dd($typebeat));
        return view('frontend.home', compact('typebeat','musician'), compact('beat'));
    }

    public function getBeat($typename_slug='')
    {
        $typebeat= TypeBeat::where('typename_slug',$typename_slug)->first();
        if(!$typebeat)
        {
            abort(404);
        }
        $lb=Beat::where('typebeat_id', $typebeat->id)->get();
        return view('frontend.beat', compact('typebeat','lb'));
    }
    public function getBeatDetail($typename_slug='', $beatname_slug='')
    { 
       // Tìm thông tin sản phẩm dựa trên các tham số nhận được
       $beat = Beat::join('typebeat', 'beat.typebeat_id', '=', 'typebeat.id')
       ->where('typebeat.typename_slug', $typename_slug)
       ->where('beat.beatname_slug', $beatname_slug)
       ->first();
        if (!$beat) 
        {
            abort(404); // Trả về trang 404 Not Found
        }        
        return view('frontend.beatdetail', compact('beat'));
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
        // return view('user.register');
        return view('rapper.register');
    }
    public function getLogin()
    {
        return view('rapper.login');
        // return view('user.login');
    }
  

}
