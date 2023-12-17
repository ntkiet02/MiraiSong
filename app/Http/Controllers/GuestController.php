<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rapper;
class GuestController extends Controller
{
    public function getHome()
    {
        $rapper = Rapper::all();
        return view('rapper.home', compact('rapper'));
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
