<?php

namespace App\Http\Controllers;

use App\Models\Rapper;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class RapperController extends Controller
{
    public function getList()
    {
        $rapper = Rapper::all();
        return view('rapper.list', compact('rapper'));
    }
    public function getAdd()
    {
        return view('rapper.add');
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

        $orm = new Rapper();
        $orm->name = $request->name;
        $orm->username = Str::before($request->email, '@');
        $orm->email = $request->email;
        $orm->password = Hash::make($request->password);
        $orm->role = $request->role;
        $orm->save();

        // Sau khi thêm thành công thì tự động chuyển về trang danh sách
        return redirect()->route('rapper');
    }

    public function getUpdate($id)
    {
        $nguoidung = Rapper::find($id);
        return view('rapper.update', compact('rapper'));
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

        $orm = Rapper::find($request->id);
        $orm->name = $request->name;
        $orm->username = Str::before($request->email, '@');
        $orm->email = $request->email;
        $orm->role = $request->role;
        if (!empty($request->password))
            $orm->password = Hash::make($request->password);
        $orm->save();

        // Sau khi sửa thành công thì tự động chuyển về trang danh sách
        return redirect()->route('rapper');
    }

    public function getXoa($id)
    {
        $orm = Rapper::find($id);
        $orm->delete();

        // Sau khi xóa thành công thì tự động chuyển về trang danh sách
        return redirect()->route('rapper');
    }

}
