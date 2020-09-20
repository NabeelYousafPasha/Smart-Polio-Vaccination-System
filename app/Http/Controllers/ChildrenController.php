<?php

namespace App\Http\Controllers;

use App\Children;
use App\Parentref;
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
        $children = Children::get();
        return view('dashboard.pages.children.listchild')->with(['children' => $children]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.children.createchild');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parentref = Parentref::where('user_id',auth()->user()->id)->first();
        $child = Children::create([
            'name' => $request->name,
            'DOB'=> $request->DOB,
            'parentref_id' => $parentref->id 
            ]);
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
        return view('dashboard.pages.children.viewchild')->with(['children' => $children->with('parentref','parentref.user')->first()]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Children  $children
     * @return \Illuminate\Http\Response
     */
    public function edit(Children $children)
    {
        return view('dashboard.pages.children.editchild')->with(['children' => $children->with('parentref')->first()]);

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
