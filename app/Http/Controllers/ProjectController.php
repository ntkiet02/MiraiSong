<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Status;
use App\Models\ProjectDetail;
class ProjectController extends Controller
{
    public function getList()
	{
		$project = Project::orderBy('created_at', 'desc')->get();
		return view('admin.project.list', compact('project'));
	}
	
	public function getAdd()
	{
		// Đặt hàng bên Front-end
	}
	
	public function postAdd(Request $request)
	{
		// Xử lý đặt hàng bên Front-end
	}
	
	public function getUpdate($id)
	{
		$project = Project::find($id);
		$status = Status::all();
		return view('admin.project.update', compact('project', 'status'));
	}
	
	public function postUpdate(Request $request, $id)
	{
		$orm = Project::find($id);
		$orm->status_id = $request->status_id;
		$orm->save();
		// Sau khi sửa thành công thì tự động chuyển về trang danh sách
		return redirect()->route('admin.project');
	}
	
	public function getDelete($id)
	{
		$orm = Project::find($id);
		$orm->delete();
		$detail = ProjectDetail::where('project_id', $orm->id)->delete();
        // Sau khi xóa thành công thì tự động chuyển về trang danh sách
		return redirect()->route('admin.project');
	}
}
