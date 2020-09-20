<?php

namespace App\Http\Controllers;

use App\Children;
use App\Parentref;
use Illuminate\Http\Request;

class ParentrefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parentref  $parentref
     * @return \Illuminate\Http\Response
     */
    public function show(Parentref $parentref)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parentref  $parentref
     * @return \Illuminate\Http\Response
     */
    public function edit(Parentref $parentref)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parentref  $parentref
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parentref $parentref)
    {
        // $parentref->name = $request->name;
        // $parentref->CNIC = $request->CNIC;
        // $parentref->address = $request->address;
        // $parentref->update();
        // return redirect()->route('listchildren');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parentref  $parentref
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parentref $parentref)
    {
        //
    }
}
