<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rapper;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Beat;
class GuestController extends Controller
{
    public function getHome()
    {
        if(Auth::check())
        {
            $rapper = Rapper::find(Auth::user()->id);
            return view('rapper.home', compact('rapper'));
        }
        else
            return redirect()->route('rapper.login');
    }

    public function getFavourite()
    {
        if (Auth::check())      
            return view('rapper.favourite');
        else
            return redirect()->route('rapper.login');
    }
    public function getAddToFavourite($typename_slug, $beatname_slug='')
    {
        $beat = Beat::join('typebeat', 'beat.typebeat_id', '=', 'typebeat.id')
        ->where('typebeat.typename_slug', $typename_slug)
        ->where('beat.beatname_slug', $beatname_slug)
        ->first();
         if (!$beat) 
         {
             abort(404); // Trả về trang 404 Not Found
         }        
         return view('rapper.favourite', compact('beat'));
        
    }
    // public function postSaveToFavourite(Request $request)
    // {
    //     $orm=new Project();
    //     $orm->rapper_id=Auth::user()->id;
    //     $orm->status_id=1;
    //     $orm->beat_id=$request->beat_id;
    //     $orm->projectname=$request->projectname;
    //     $orm->lyric=$request->lyric;
    //     $orm->recording='Null';
    //     $orm->image_project='Null';
    //     $orm->save();
    //     return redirect()->route('rapper.home');
        
    // }
    public function showProject($beat_id)
    {   
        $beat=Beat::find($beat_id);
        return view('rapper.create',['beat_id'=>$beat_id],compact('beat'));
    }
    public function saveProject(Request $request, $beat_id)
    {
        Project::create([
            'rapper_id'=>Auth::user()->id,
            'status_id'=>1,
            'beat_id'=>$beat_id,
            'projectname'=>$request->input('projectname'),
            'lyric'=>$request->input('lyric'),
            'recording'=>'chưa làm',
            'image_project'=>'chưa làm',
        ]);
        return redirect()->route('rapper.home');
    }
    public function postLogout()
    {
        return redirect()->route('frontend.home');
    }
}
