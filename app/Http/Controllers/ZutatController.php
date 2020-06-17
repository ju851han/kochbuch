<?php

namespace App\Http\Controllers;

use App\Zutat;
use Illuminate\Http\Request;

class ZutatController extends Controller
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
    public function index(Request $request,$kid)
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
     * @param  \App\Zutat  $zutat
     * @return \Illuminate\Http\Response
     */
    public function show(Zutat $zutat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Zutat  $zutat
     * @return \Illuminate\Http\Response
     */
    public function edit(Zutat $zutat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Zutat  $zutat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zutat $zutat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Zutat  $zutat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zutat $zutat)
    {
        //
    }
}
