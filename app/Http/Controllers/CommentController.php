<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function getDanhSach()
    {
        $binhluanbaiviet = Comment::orderBy('created_at', 'desc')->get();
        return view('admin.comment.list', compact('binhluanbaiviet'));
    }
    public function getXoa($id)
    {
        $orm = Comment::find($id);
        $orm->delete();
        // Sau khi xóa thành công thì tự động chuyển về trang danh sách
        return redirect()->route('admin.binhluanbaiviet');
    }
    public function getKiemDuyet($id)
    {
        $orm = Comment::find($id);
        $orm->kiemduyet = 1 - $orm->kiemduyet;
        $orm->save();
        return redirect()->route('admin.binhluanbaiviet');
    }
    public function getKichHoat($id)
    {
        $orm = Comment::find($id);
        $orm->kichhoat = 1 - $orm->kichhoat;
        $orm->save();
        return redirect()->route('admin.binhluanbaiviet');
    }

}
