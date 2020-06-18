<?php

namespace App\Http\Controllers;

use App\Kochbuch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KochbuchController extends Controller
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
     * Shows all Kochbuecher
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kochbuecher = Kochbuch::all();
        return view('kochbuecher/index')->with('kochbuecher', $kochbuecher);
    }

    /**
     * Shows a form to create a new Kochbuch
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
     * Saved the new Kochbuch in DB
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
     * Shows one Kochbuch
     *
     * @param $kID
     * @return \Illuminate\Http\Response
     */
    public function show($kID)
    {
        /*TODO authorized Role wo festzulegen?*/
        /*     $request->user()->authorizeRole('logged_user');*/
        $kochbuch = Kochbuch::find($kID);
        if (is_null($kochbuch)) {
            return redirect()->action('KochbuchController@index');
        }
        return view('kochbuecher/show')->with('k', $kochbuch);
    }

    /**
     * Shows a form to update a Kochbuch
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
        if (is_null($kochbuch)) {
            return redirect()->action('KochbuchController@index');
        }
        return view('kochbuecher/edit')->with('k', $kochbuch);


    }

    /**
     * Updates the edited Kochbuch in DB
     *
     * @param  \Illuminate\Http\Request $request
     * @param $kID
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kID)
    {
        /*TODO authorized Role wo festzulegen?*/
        /*     $request->user()->authorizeRole('logged_user');*/
        $kochbuch = Kochbuch::find($kID);
        /*TODO Validation */
        $kochbuch->kName = $request->kName;
        $kochbuch->save();
        return redirect()->action('KochbuchController@show', ['kID' => $kID]);

    }

    /**
     * Destroy the specified Kochbuch from DB
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
        Session::flash('alert-success', 'Kochbuch ' . $kochbuch->kName . ' wurde erfolgreich gelöscht.');
        return redirect()->action('KochbuchController@index');
    }
}
