<?php

namespace App\Http\Controllers;

use App\Models\AboutOne;
use Illuminate\Http\Request;

class AboutOneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('About.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutOne  $aboutOne
     * @return \Illuminate\Http\Response
     */
    public function show(AboutOne $aboutOne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutOne  $aboutOne
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutOne $aboutOne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutOne  $aboutOne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutOne $aboutOne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutOne  $aboutOne
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutOne $aboutOne)
    {
        //
    }
}
