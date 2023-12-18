<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rapper;
class GuestController extends Controller
{
    public function getHome()
    {
        // $rapper = Rapper::all();, compact('rapper')
        return view('rapper.home');
    }
    public function getWriteRap()
    {
        return view('rapper.writerap');
    }
    public function postWriteRap(Request $request)
    {
        return redirect()->route('rapper.writerapsuccess');
    }
    public function getWriteRapSuccess()
    {
        return view('rapper.writerapsuccess');
    }
    public function getProject($id='')
    {
        return view('rapper.project');
    }
    public function postProject(Request $request, $id)
    {
    }
    public function getInformation()
    {
        return view('rapper.information');
    }
    public function postInformation(Request $request)
    {
        return redirect()->route('rapper.home');
    }
    public function postLogout()
    {
        return redirect()->route('frontend.home');
    }
}
