<?php

namespace App\Http\Controllers;

use App\Zutat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ZutatController extends Controller
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
     * Shows all Zutaten
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zutaten = Zutat::all();
        return view('zutaten/index')->with('zutaten', $zutaten);
    }

    /**
     * Shows a form to create a new Zutat
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
     * Saved the new Zutat in DB
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*TODO authorized Role wo festzulegen?*/
        /*     $request->user()->authorizeRole('logged_user');*/
        /*TODO Validation */
        $zutat = new Zutat;
        $zutat->zName = $request->zName;
        $zutat->kostenJeEinheit = $request->kostenJeEinheit;
        $zutat->mengeneinheit = $request->mengeneinheit;
        $zutat->produktgruppe = $request->produktgruppe;
        $zutat->save();

        return redirect()->action('ZutatController@index');
    }

    /**
     * Shows one Zutat
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
        if (is_null($zutat)) {
            return redirect()->action('ZutatController@index');
        }
        return view('zutat/show')->with('z', $zutat);

    }

    /**
     * Shows a form to update a Zutat
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
        if (is_null($zutat)) {
            return redirect()->action('ZutatController@index');
        }
        return view('zutaten/edit')->with('z', $zutat);

    }

    /**
     * Updates the edited Zutat in DB
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Zutat $zutat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $zName)
    {
        /*TODO authorized Role wo festzulegen?*/
        /*     $request->user()->authorizeRole('logged_user');*/
        $zutat = Zutat::find($zName);
        /*TODO Validation */
        $zutat->kostenjeEinheit = $request->kostenjeEinheit;
        $zutat->mengeneinheit = $request->mengeneinheit;
        $zutat->produktgruppe = $request->produktgruppe;
        $zutat->save();
        return redirect()->action('ZutatController@show', ['zName' => $zName]);
    }

    /**
     * Destroy the specified Zutat from DB
     *
     * @param Request $request
     * @param $zName
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $zName)
    {
        // if ( AUTH::user()->hasRole('admin')) {
        $zutat = Zutat::find($zName);
        foreach ($zutat->rezepts as $rezept) {
            $zutat->rezepts()->detach($rezept); // deletes row from rezept_zutat table; it does not delete the zutats from zutat table
        }
        $zutat->delete();
        Session::flash('alert-success', 'Rezept ' . $zutat->zName . ' wurde erfolgreich gelöscht.');
        return redirect()->action('ZutatController@index');
        /*    } else {
        abort(401, 'This action is unauthorized.');
        }*/
    }
}
