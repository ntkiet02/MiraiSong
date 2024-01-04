<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rapper;
class GuestController extends Controller
{
    public function getHome()
    {
        if(Auth::check())
        {
            $rapper = Rapper::find(Auth::user()->id);
            return view('rapper.home', compact('rapper'));
        }
        else
            return redirect()->route('rapper.login');
    }
    public function getWriteRap()
    {
        if (Auth::check())
            return view('rapper.writerap');
        else
            return redirect()->route('rapper.login');
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
