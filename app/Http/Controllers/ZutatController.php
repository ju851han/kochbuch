<?php

namespace App\Http\Controllers;

use App\Zutat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
    public function index()
    {
        $zutaten = Zutat::all();
        return view('zutaten/index')->with('zutaten', $zutaten);
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
        return view('zutaten/create');
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
        $zutat = new Zutat;
        $zutat->zName= $request->zName;
        $zutat->kostenJeEinheit= $request->kostenJeEinheit;
        $zutat->mengeneinheit= $request->mengeneinheit;
        $zutat->produktgruppe= $request->produktgruppe;
        $zutat->save();

        return redirect()->action('ZutatController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param $zName
     * @return \Illuminate\Http\Response
     */
    public function show($zName)
    {
        /*TODO Später löschen*/
        /*TODO authorized Role wo festzulegen?*/
        /*     $request->user()->authorizeRole('logged_user');*/
        $zutat = Zutat::find($zName);
        if(is_null($zutat)){
            return redirect()->action('ZutatController@index');
        }
        return view('zutat/show')->with('z',$zutat);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param $zName
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $zName)
    {
        /*TODO authorized Role wo festzulegen?*/
        /*     $request->user()->authorizeRole('logged_user');*/
        $zutat = Zutat::find($zName);
        if(is_null($zutat)){
            return redirect()->action('ZutatController@index');
        }
        return view('zutat/edit')->with('r',$zutat);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Zutat  $zutat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $zName)
    {
        /*TODO authorized Role wo festzulegen?*/
        /*     $request->user()->authorizeRole('logged_user');*/
        $zutat=Zutat::find($zName);
        /*TODO Validation */
        $zutat->kostenjeEinheit= $request->kostenjeEinheit;
        $zutat->mengeneinheit= $request->mengeneinheit;
        $zutat->produktgruppe= $request->produktgruppe;
        $zutat->save();
        return redirect()->action('ZutatController@show',['zName'=>$zName]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param $zName
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $zName)
    {
        /*TODO authorized Role wo festzulegen?*/
        /*     $request->user()->authorizeRole('admin');*/
        $zutat = Zutat::find($zName);
        $zutat->delete();
        Session::flash('alert-success', 'Rezept '.$zutat->zName.' wurde erfolgreich gelöscht.');
        return redirect()->action('RezeptController@index');


    }
}
