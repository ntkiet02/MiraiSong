<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rapper;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Beat;
use App\Models\Comment;
use App\Models\Status;
use Illuminate\Support\Facades\Hash;
class GuestController extends Controller
{
    public function getHome()
    {
        if(Auth::check())
        {
            $rapper = Rapper::find(Auth::user()->id);
            $lbtorapper=Project::where('rapper_id', Auth::user()->id)->get();
            return view('rapper.home', compact('rapper','lbtorapper'));
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
            'projectname_slug'=>Str::slug($request->input('projectname'), '-'),
            'lyric'=>$request->input('lyric'),
        ]);
        return redirect()->route('rapper.createsuccess');
    }
      public function getSuccess()
    {
        return view('rapper.createsuccess');
    }
    public function getUpdateProject( $rapper_id='', $beatname_slug='', $projectname_slug='')
    {
        $project=Project::join('rapper','project.rapper_id','=','rapper.id')
        ->join('beat','project.beat_id','=','beat.id')
        ->where('rapper.id',$rapper_id)
        ->where('beat.beatname_slug',$beatname_slug)
        ->where('project.projectname_slug',$projectname_slug)      
        ->first();
        if(!$project)
        {
            abort(404);
        }
        $status=Status::all();
        return view('rapper.update',compact('project','status'));
        // return dd($project);
    }
    public function postUpdateProject(Request $request,$rapper_id='', $beatname_slug='', $projectname_slug='')
    {
        $project=Project::join('rapper','project.rapper_id','=','rapper.id')
        ->join('beat','project.beat_id','=','beat.id')
        ->where('rapper.id',$rapper_id)
        ->where('beat.beatname_slug',$beatname_slug)
        ->where('project.projectname_slug',$projectname_slug)    
        ->update([
            'projectname'=>$request->input('projectname'),
            'projectname_slug'=>Str::slug($request->input('projectname'), '-'),
            'lyric'=>$request->input('lyric'),                
        ]);
        return redirect()->route('rapper.createsuccess');
        
       
    }
    public function deleteProject( $rapper_id='',$beatname_slug='', $projectname_slug='')
    {
        $project=Project::join('rapper','project.rapper_id','=','rapper.id')
        ->join('beat','project.beat_id','=','beat.id')
        ->where('rapper.id',$rapper_id)
        ->where('beat.beatname_slug',$beatname_slug)
        ->where('project.projectname_slug',$projectname_slug)
        ->delete();
        if(!$project)
        {
            abort(404);
        }
        return redirect()->route('rapper.home');
    }
    //Update Profile
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
            $path = Storage::putFileAs('Rapper_Image', $request->file('image_rapper'), $filename);
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
        $rapper= Auth::user()->id;
        if(!$rapper)
        {
            abort(404);
        }
        $lbtorapper=Project::where('rapper_id', $rapper)->get();
        return view('rapper.project', compact('rapper','lbtorapper'));
    }
    public function getProjectDetail($rapper_id='',$beatname_slug='', $projectname_slug='')
    {
        $project=Project::join('rapper','project.rapper_id','=','rapper.id')
        ->join('beat','project.beat_id','=','beat.id')
        
        ->where('beat.beatname_slug',$beatname_slug)
        ->where('project.projectname_slug',$projectname_slug)
        ->where('rapper.id',$rapper_id)
        ->first();
        if(!$project)
        {
            abort(404);
        }
        return view('rapper.projectdetail',compact('project'));
    }
    public function postLogout()
    {
        return redirect()->route('frontend.home');
    }
    public function getBinhLuan($beat_id)
    {   
        $beat=Beat::find($beat_id);
        return view('frontend.beatdetail',['beat_id'=>$beat_id],compact('beat'));
    }
    public function postBinhLuan(Request $request, $beat_id)
    {
        Comment::create([
            'rapper_id'=>Auth::user()->id,
            'beat_id'=>$beat_id,
            'noidungbinhluan'=>$request->input('lyric'),
            'kiemduyet'=>0,
            'kichhoat'=>1,
        ]);
        return redirect()->route('frontend.beatdetail',['']);
    }
    
}
