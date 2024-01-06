<?php

namespace App\Http\Controllers;

use App\Models\Rapper;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
class RapperController extends Controller
{
    public function getList()
    {
        $rapper = Rapper::all();
        return view('admin.rapper.list', compact('rapper'));
    }
    public function getAdd()
    {
        return view('admin.rapper.add');
    }
    public function postAdd(Request $request)
    {
        // Kiểm tra
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:rapper'],
            'role' => ['required'],
            'password' => ['required', 'min:4', 'confirmed'],
        ]);
        $path='';
        if($request->hasFile('image_rapper'))
        {
            $extension = $request->file('image_rapper')->extension();
            $filename = Str::slug($request->name, '-') . '.' . $extension;
            $path = Storage::putFileAs('Rapper_Image', $request->file('image_rapper'), $filename);
        }
        $orm = new Rapper();
        $orm->name = $request->name;
        $orm->username = Str::before($request->email, '@');
        $orm->email = $request->email;
        $orm->password = Hash::make($request->password);
        $orm->role = $request->role;
        if(!empty($path))
            $orm->image_rapper=$path;
        $orm->information=$request->information;
        $orm->save();

        // Sau khi thêm thành công thì tự động chuyển về trang danh sách
        return redirect()->route('admin.rapper');
    }

    public function getUpdate($id)
    {
        $rapper = Rapper::find($id);
        return view('admin.rapper.update', compact('rapper'));
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
        return redirect()->route('admin.rapper');
    }

    public function getDelete($id)
    {
        $orm = Rapper::find($id);
        $orm->delete();

        // Sau khi xóa thành công thì tự động chuyển về trang danh sách
        return redirect()->route('admin.rapper');
    }

}
