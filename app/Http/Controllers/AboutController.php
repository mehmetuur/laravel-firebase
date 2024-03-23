<?php

namespace App\Http\Controllers;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts=new About();
        return view('about',compact('abouts'));

    }
    public function create()
    {
        $abouts=new About();
        return view('about.create_about_post',compact('abouts'));

    }
    public function store(Request $request)
    {
        $abouts=new About();
        $abouts->body=$request->body;

        $abouts->save();

        return redirect()->back();

    }

    public function edit()
    {
        $abouts=About::all();
       

        return view('about.edit-about-post',compact('abouts'));

    }
}
