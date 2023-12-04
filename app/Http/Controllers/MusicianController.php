<?php

namespace App\Http\Controllers;

use App\Models\Musician;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class MusicianController extends Controller
{
    public function getList()
    {
        $musician = Musician::all();
        return view('musician.list', compact('musician'));
    }
    public function getAdd()
    {
        return view('musician.add');
    }    
    public function postAdd(Request $request)
    {      
        $orm = new Musician();
        $orm->stagename = $request->stagename;
        $orm->stagename_slug = Str::slug($request->stagename, '-');
        $orm->save();
        return redirect()->route('musician');
    }
    public function getUpdate($id)
    {
        $musician = Musician::find($id);
        return view('musician.update', compact('musician'));
    }
    public function postUpdate(Request $request, $id)
    {
        $orm = Musician::find($id);
        $orm->stagename = $request->stagename;
        $orm->stagename_slug = Str::slug($request->stagename, '-');
        $orm->save();   
        return redirect()->route('musician');
    }
    public function getDelete($id)
    {
        $orm = Musician::find($id);
        $orm->delete();
        return redirect()->route('musician');
    }
}
