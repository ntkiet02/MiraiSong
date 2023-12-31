<?php

namespace App\Http\Controllers;

use App\Models\TypeBeat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TypeBeatController extends Controller
{
    public function getList()
    {
        $typebeat = TypeBeat::all();
        return view('admin.typebeat.list', compact('typebeat'));
    }
    public function getAdd()
    {
        return view('admin.typebeat.add');
    }  
    public function postAdd(Request $request)
    {
        $orm = new TypeBeat();
        $orm->typename = $request->typename;
        $orm->typename_slug = Str::slug($request->typename, '-');
        $orm->save();
        return redirect()->route('admin.typebeat');
    }   
    public function getUpdate($id)
    {
        $typebeat = TypeBeat::find($id);
        return view('admin.typebeat.update', compact('typebeat'));
    }
    public function postUpdate(Request $request, $id)
    {
        $orm = TypeBeat::find($id);
        $orm->typename = $request->typename;
        $orm->typename_slug = Str::slug($request->typename, '-');
        $orm->save();
        
        return redirect()->route('admin.typebeat');
    }  
    public function getDelete($id)
    {
        $orm = TypeBeat::find($id);
        $orm->delete();
        return redirect()->route('admin.typebeat');
    }
}
