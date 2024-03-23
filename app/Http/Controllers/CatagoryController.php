<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $catagories=Catagory::all();
        return view('catagories.index_catagory',compact('catagories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('catagories.create_catagory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name'=>'required | unique:catagories',
            
   
         ]);
   
         $name=$request->input('name');
         $catagory=new Catagory();
         $catagory->name = $name;
         $catagory->save();

         return redirect()->back()->with('status','Post Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Catagory $catagory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Catagory $catagory)
    {
        return view('catagories.edit_catagory',compact('catagory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Catagory $catagory)
    {
        
        $request->validate([

            'name'=>'required | unique:catagories',
            
   
         ]);
   
         $name=$request->input('name');
         
         $catagory->name = $name;
         $catagory->save();

         return redirect(route('catagories.index'))->with('status','Post edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Catagory $catagory)
    {
        $catagory->delete();
        return redirect()->back()->with('status','Post delete');
    }
}
