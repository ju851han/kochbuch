<?php

namespace App\Http\Controllers;

use App\Wochenkochplan;
use Illuminate\Http\Request;

class WochenkochplanController extends Controller
{
    /**
     * Create a new controller instance. Only for authorised User the Controller will execute his functions.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wochenkochplan  $wochenkochplan
     * @return \Illuminate\Http\Response
     */
    public function edit(Wochenkochplan $wochenkochplan)
    {
        return view('wochenkochplan/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wochenkochplan  $wochenkochplan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wochenkochplan $wochenkochplan)
    {
        //
    }


}
