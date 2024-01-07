<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rapper;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Beat;
use Illuminate\Support\Facades\Hash;
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
        return redirect()->route('rapper.createsuccess');
    }
    public function getSuccess()
    {
        return view('rapper.createsuccess');
    }
    public function getUpdate($id)
    {
        $rapper = Rapper::find($id);
        return view('rapper.updateprofile', compact('rapper'));
    }

    public function postUpdate(Request $request, $id)
    {
        // Kiểm tra
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:rapper,email,' . $id],
            'role' => ['required'],
            'password' => ['confirmed'],
        ]);
        $path='';
        if($request->hasFile('image_rapper'))
        {
            $extension = $request->file('image_rapper')->extension();
            $filename = Str::slug($request->beatname, '-') . '.' . $extension;
            $path = Storage::putFileAs('Rapper', $request->file('image_rapper'), $filename);
        }
        $orm = Rapper::find($request->id);
        $orm->name = $request->name;
        $orm->username = Str::before($request->email, '@');
        $orm->email = $request->email;
        $orm->role = $request->role;
        if (!empty($request->password))
            $orm->password = Hash::make($request->password);
        if(!empty($path))
            $orm->image_rapper=$path;
        $orm->information=$request->information;
        $orm->save();

        // Sau khi sửa thành công thì tự động chuyển về trang danh sách
        return redirect()->route('rapper.home');
    }
    public function getProject($rapper_id='')
    {
        $rapper= Rapper::where('rapper_id',$rapper_id)->first();
        if(!$rapper)
        {
            abort(404);
        }
        $lbtorapper=Project::where('project_id', $rapper->id)->get();
        return view('rapper.home', compact('rapper','lbtorapper'));
    }
    public function postLogout()
    {
        return redirect()->route('frontend.home');
    }
}
