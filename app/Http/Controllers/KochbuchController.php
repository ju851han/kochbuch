<?php

namespace App\Http\Controllers;

use App\Kochbuch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $kochbuecher = Kochbuch::all();
        return view('kochbuecher/index')->with('kochbuecher', $kochbuecher);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {
        /*TODO authorized Role wo festzulegen?*/
        /*     $request->user()->authorizeRole('logged_user');*/
        return view('kochbuecher/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*TODO authorized Role wo festzulegen?*/
        /*     $request->user()->authorizeRole('logged_user');*/

        $kochbuch = Kochbuch::create($request->all());
        /*TODO Validation */
        return redirect()->action('KochbuchController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param $kID
     * @return \Illuminate\Http\Response
     */
    public function show($kID)
    {
        /*TODO authorized Role wo festzulegen?*/
        /*     $request->user()->authorizeRole('logged_user');*/
        $kochbuch = Kochbuch::find($kID);
        if(is_null($kochbuch)){
            return redirect()->action('KochbuchController@index');
        }
        return view('kochbuecher/show')->with('k',$kochbuch);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param $kID
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $kID)
    {
        /*TODO authorized Role wo festzulegen?*/
        /*     $request->user()->authorizeRole('logged_user');*/
        $kochbuch = Kochbuch::find($kID);
        if(is_null($kochbuch)){
            return redirect()->action('KochbuchController@index');
        }
        return view('kochbuecher/edit')->with('k',$kochbuch);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $kID
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kID)
    {
        /*TODO authorized Role wo festzulegen?*/
        /*     $request->user()->authorizeRole('logged_user');*/
        $kochbuch=Kochbuch::find($kID);
        /*TODO Validation */
        $kochbuch->kName= $request->kName;
        $kochbuch->save();
        return redirect()->action('KochbuchController@show',['kID'=>$kID]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param $kID
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $kID)
    {
        /*TODO authorized Role wo festzulegen?*/
        /*     $request->user()->authorizeRole('logged_user');*/
        $kochbuch = Kochbuch::find($kID);
        $kochbuch->delete();
        Session::flash('alert-success', 'Kochbuch '.$kochbuch->kName.' wurde erfolgreich gelöscht.');
        return redirect()->action('KochbuchController@index');
    }
}
