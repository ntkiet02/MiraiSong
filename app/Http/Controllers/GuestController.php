<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function getHome()
    {
        return view('rapper.home');
    }
    public function getWriteRap()
    {
        return view ('rapper.writerap');
    }
    public function postWriteRap()
    {
        return redirect()->route('rapper.writerapsuccess');
    }
    public function getWriteRapSuccess()
    {
        return view ('rapper.writerapsuccess');
    }
    public function getProject($id='')
    {
        return view('rapper.donhang');
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
