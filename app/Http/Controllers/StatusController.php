<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use Illuminate\Support\Str;
class StatusController extends Controller
{
    public function getList()
  {
      $status = Status::all();
      return view('admin.status.list', compact('status'));
  }
  public function getAdd()
  {
      return view('admin.status.add');
  }
  public function postAdd(Request $request)
  {
      $orm = new Status();
      $orm->statusname = $request->statusname;
      $orm->save();
      return redirect()->route('admin.status');
  }
  public function getUpdate($id)
  {
      $status = Status::find($id);
      return view('admin.status.update', compact('status'));
  }
  public function postUpdate(Request $request, $id)
  {
      $orm = Status::find($id);
      $orm->statusname = $request->statusname;
      $orm->save();
      return redirect()->route('admin.tatus');
  }
  public function getDelete($id)
  {
      $orm = Status::find($id);
      $orm->delete();
      return redirect()->route('admin.status');
  }
}
