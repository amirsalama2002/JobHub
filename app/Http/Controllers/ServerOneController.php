<?php

namespace App\Http\Controllers;

use App\Models\ServerOne;
use Illuminate\Http\Request;

class ServerOneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Server.index');
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
     * @param  \App\Models\ServerOne  $serverOne
     * @return \Illuminate\Http\Response
     */
    public function show(ServerOne $serverOne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServerOne  $serverOne
     * @return \Illuminate\Http\Response
     */
    public function edit(ServerOne $serverOne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServerOne  $serverOne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServerOne $serverOne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServerOne  $serverOne
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServerOne $serverOne)
    {
        //
    }
}
