<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Beat;
use App\Models\TypeBeat;
use App\Models\Musician;
use Illuminate\Support\Facades\Storage;
class BeatController extends Controller
{
    public function getList()
    {
        $beat = Beat::paginate(100);
        return view('admin.beat.list', compact('beat'));
    }
    public function getAdd()
    {
        $typebeat= TypeBeat::all();
        $musician=Musician::all();
        return view('admin.beat.add', compact('typebeat','musician'));
    }
    public function postAdd(Request $request)
    {
        $path='';
        if($request->hasFile('file_path'))
        {
            $extension = $request->file('file_path')->extension();
            $filename = Str::slug($request->beatname, '-') . '.' . $extension;
            $path = Storage::putFileAs('Beat_MP3', $request->file('file_path'), $filename);
        }
        $path2='';
        if($request->hasFile('image_beat'))
        {
            $extension2 = $request->file('image_beat')->extension();
            $filename2 = Str::slug($request->beatname, '-') . '.' . $extension2;
            $path2 = Storage::putFileAs('Beat_Image', $request->file('image_beat'), $filename2);
        }
        $orm = new Beat();
        $orm->typebeat_id=$request->typebeat_id;
        $orm->musician_id=$request->musician_id;
        $orm->beatname = $request->beatname;
        $orm->beatname_slug = Str::slug($request->beatname, '-');     
        if(!empty($path))
            $orm->file_path=$path;
        if(!empty($path2))
            $orm->image_beat=$path2;
        $orm->save();
        return redirect()->route('admin.beat');
    }
    public function getUpdate($id)
    {
        $beat = Beat::find($id);
        $typebeat = TypeBeat::all();
        $musician =Musician::all();
        return view('admin.beat.update', compact('beat','typebeat','musician'));
    }
    public function postUpdate(Request $request, $id)
    {
        $path='';
        if($request->hasFile('file_path'))
        {
            $sp=Beat::find($id);
            if(!empty($sp->file_path)) Storage::delete($sp->file_path);

            $extension = $request->file('file_path')->extension();
            $filename = Str::slug($request->beatname, '-') . '.' . $extension;
            $path = Storage::putFileAs('Beat_MP3', $request->file('file_path'), $filename);
        }
        $path2='';
        if($request->hasFile('image_beat'))
        {
            $sp2=Beat::find($id);
            if(!empty($sp2->image_beat)) Storage::delete($sp2->image_beat);

            $extension2 = $request->file('image_beat')->extension();
            $filename2= Str::slug($request->beatname, '-') . '.' . $extension2;
            $path2 = Storage::putFileAs('Beat_Image', $request->file('image_beat'), $filename2);
        }
              
        $orm = Beat::find($id);
        $orm->typebeat_id=$request->typebeat_id;
        $orm->musician_id=$request->musician_id;
        $orm->beatname = $request->beatname;
        $orm->beatname_slug = Str::slug($request->beatname, '-');
        if(!empty($path))
            $orm->file_path=$path;
        if(!empty($path2))
            $orm->image_beat=$path2;
        $orm->save();
        return redirect()->route('admin.beat');
    }
    public function getDelete($id)
    {
        $orm = Beat::find($id);
        if(!empty($orm->file_path)) Storage::delete($orm->file_path);
        $orm->delete();
        return redirect()->route('admin.beat');
    }
}
