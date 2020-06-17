<?php

namespace App\Http\Controllers;

use App\Kochbuch;
use Illuminate\Http\Request;

class KochbuchController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kochbuch  $kochbuch
     * @return \Illuminate\Http\Response
     */
    public function show(Kochbuch $kochbuch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kochbuch  $kochbuch
     * @return \Illuminate\Http\Response
     */
    public function edit(Kochbuch $kochbuch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kochbuch  $kochbuch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kochbuch $kochbuch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kochbuch  $kochbuch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kochbuch $kochbuch)
    {
        //
    }
}
