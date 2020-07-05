<?php

namespace App\Http\Controllers;

use App\Wochenkochplan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $wochenkochplan =Wochenkochplan::where('users_id', AUTH::user()->id)->get();
        if(is_null($wochenkochplan)){
           $wochenkochplan=new Wochenkochplan;
           $wochenkochplan->wochentag="Montag";

        }

        return view('wochenkochplan/edit')->with('wochenkochplan', $wochenkochplan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Wochenkochplan $wochenkochplan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wochenkochplan $wochenkochplan)
    {
        //
    }


}
