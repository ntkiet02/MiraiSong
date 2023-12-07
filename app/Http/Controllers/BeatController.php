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
        $beat = Beat::all();
        return view('beat.list', compact('beat'));
    }
    public function getAdd()
    {
        $typebeat= TypeBeat::all();
        $musician=Musician::all();
        return view('beat.add', compact('typebeat','musician'));
    }
    public function postAdd(Request $request)
    {
        $orm = new Beat();
        $orm->typebeat_id=$request->typebeat_id;
        $orm->musician_id=$request->musician_id;
        $orm->beatname = $request->beatname;
        $orm->beatname_slug = Str::slug($request->beatname, '-');
        $orm->time = $request->time;
        $orm->file_path=Storage::putFile($request->file_path);
        $orm->save();
        return redirect()->route('beat');
    }
    public function getUpdate($id)
    {
        $beat = Beat::find($id);
        $typebeat = TypeBeat::all();
        $musician =Musician::all();
        return view('beat.update', compact('beat','typebeat','musician'));
    }
    public function postUpdate(Request $request, $id)
    {
           
        
        $orm = Beat::find($id);
        $orm->typebeat_id=$request->typebeat_id;
        $orm->musician_id=$request->musician_id;
        $orm->beatname = $request->beatname;
        $orm->beatname_slug = Str::slug($request->beatname, '-');
        $orm->time = $request->time;
    
        $orm->file_path=$request->file_path;
        $orm->save();
        return redirect()->route('beat');
    }
    public function getDelete($id)
    {
    
        $orm = Beat::find($id);
        if(!empty($orm->file_path)) Storage::delete($orm->file_path);
        $orm->delete();
        return redirect()->route('beat');
    }
}
