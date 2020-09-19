<?php

namespace App\Http\Controllers;

use App\Children;
use Illuminate\Http\Request;

class ChildrenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*
    LIST ALL CHILDREN OF LOGIN USER
    */
    public function index()
    {
        $chidren = Children::where('parentref_id' , auth()->user()->id)->with('parentref')->get();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('child.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $child = Children::create([
            'name' => $request->name,
            'DOB'=> $request->DOB,
            'parentref_id' => auth()->user()->id 
            ]);
            $child->save();
            return redirect()->route('listchildren');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Children  $children
     * @return \Illuminate\Http\Response
     */
    public function show(Children $children)
    {
        return view('child.view')->with($children->with('parentref'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Children  $children
     * @return \Illuminate\Http\Response
     */
    public function edit(Children $children)
    {
        return view('child.edit')->with($children);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Children  $children
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Children $children)
    {
        $children->name = $request->name;
        $children->DOB = $request->DOB;
        $children->update();
        return redirect()->route('listchildren');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Children  $children
     * @return \Illuminate\Http\Response
     */
    public function destroy(Children $children)
    {
        $children->delete();
        return back();
    }
}
