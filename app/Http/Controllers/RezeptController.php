<?php

namespace App\Http\Controllers;

use App\Rezept;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RezeptController extends Controller
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
        $rezepte = Rezept::all();
        return view('rezepte/index')->with('rezepte', $rezepte);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        /*TODO authorized Role wo festzulegen?*/
        /*     $request->user()->authorizeRole('logged_user');*/
        return view('rezepte/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*TODO authorized Role wo festzulegen?*/
        /*     $request->user()->authorizeRole('logged_user');*/
        /*TODO Validation */
        $rezept = new Rezept;
        $rezept->rName= $request->rName;
        $rezept->kategorie= $request->kategorie;
        $rezept->zeit= $request->zeit;
        $rezept->kostenjePortion= $request->kostenjePortion;
        $rezept->zubereitung= $request->zubereitung;
        $rezept->save();


        return redirect()->action('RezeptController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param $rID
     * @return \Illuminate\Http\Response
     */
    public function show($rID)
    {
        /*TODO authorized Role wo festzulegen?*/
        /*     $request->user()->authorizeRole('logged_user');*/
        $rezept = Rezept::find($rID);
        if(is_null($rezept)){
            return redirect()->action('RezeptController@index');
        }
        return view('rezepte/show')->with('r',$rezept);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param $rID
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$rID)
    {
        /*TODO authorized Role wo festzulegen?*/
        /*     $request->user()->authorizeRole('logged_user');*/
        $rezept = Rezept::find($rID);
        if(is_null($rezept)){
            return redirect()->action('RezeptController@index');
        }
        return view('rezepte/edit')->with('r',$rezept);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $rID
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rID)
    {
        /*TODO authorized Role wo festzulegen?*/
        /*     $request->user()->authorizeRole('logged_user');*/
        $rezept=Rezept::find($rID);
        /*TODO Validation */
        $rezept->rName= $request->rName;
        $rezept->kategorie= $request->kategorie;
        $rezept->zeit= $request->zeit;
        $rezept->kostenjePortion= $request->kostenjePortion;
        $rezept->zubereitung= $request->zubereitung;
        $rezept->save();
        return redirect()->action('RezeptController@show',['rID'=>$rID]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rezept  $rezept
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$rID)
    {
        /*TODO authorized Role wo festzulegen?*/
        /*     $request->user()->authorizeRole('admin');*/
        $rezept = Rezept::find($rID);
        $rezept->delete();
        Session::flash('alert-success', 'Rezept '.$rezept->rName.' wurde erfolgreich gelöscht.');
        return redirect()->action('RezeptController@index');

    }
}
