<?php

namespace App\Http\Controllers;

use App\Kochbuch;
use App\Rezept;
use App\Zutat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        if (AUTH::user()->hasRole('admin')) {
            $kochbuecher = Kochbuch::all();
        } else {
            $kochbuecher = Kochbuch::where('users_id', AUTH::user()->id)->get();
        }
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
        return view('kochbuecher/create_step1_Kochbuch');
    }

    /**
     * Step2: Create a new Kochbuch
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function create_step2(Request $request)
    {
        $kochbuch = new Kochbuch;
        $kochbuch->kName = $request->kName;
        $request->session()->put('kochbuch', $kochbuch);
        return view('kochbuecher/create_step2_addZutaten');
    }

    /**
     * Create Rezept / Step 3: Add Zutat
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function create_step3(Request $request)
    {
        $zutat = new Zutat;
        $zutat->zName = $request->zName;
        $zutat->mengeneinheit = $request->mengeneinheit;
        $zutat->kostenJeEinheit = $request->kostenJeEinheit;
        $zutat->produktgruppe = $request->produktgruppe;
        $request->session()->put('zutat', $zutat);

        $menge = $request->menge;
        $request->session()->put('menge', $menge);
        return view('kochbuecher/create_step3_addRezept');
    }

    /**
     * Create Rezept / Step 4: Add Rezeptdata
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create_step4(Request $request)
    {
        $rezept = new Rezept;
        $rezept->rName = $request->rName;
        $rezept->zubereitung = $request->zubereitung;
        $rezept->kategorie = $request->kategorie;
        $rezept->zeit = $request->zeit;
        $rezept->kostenjePortion = $request->kostenjePortion;
        $request->session()->put('rezept', $rezept);
        $menge = $request->session()->get('menge');
        $zutat = $request->session()->get('zutat');
        $kochbuch = $request->session()->get('kochbuch');

        return view('kochbuecher/create_step4_overview')->with('kochbuch', $kochbuch)->with('rezept', $rezept)->with('zutat', $zutat)->with('menge', $menge);
    }

    /**
     * Saved the new Kochbuch in DB
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kochbuch = $request->session()->get('kochbuch');
        $rezept = $request->session()->get('rezept');
        $zutat = $request->session()->get('zutat');
        $menge = $request->session()->get('menge');

        $kochbuch->users()->associate(Auth::user()); //add entry users_id in Table kochbuches

        $rezept->save();

        $rezept->zutats()->attach($zutat->zName, ['menge' => $menge]); //add entry in Table rezept_zutat

        $zutat->save();
        $kochbuch->save();

        $kochbuch->rezepts()->attach($rezept->rID); //add entry in Table kochbuch_rezept
        return redirect()->action('KochbuchController@index');
    }

    /**
     * Shows one Kochbuch
     *
     * @param $kID
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $kID)
    {
        $kochbuch = Kochbuch::find($kID);
        if (is_null($kochbuch)) {
            return redirect()->action('KochbuchController@index');
        }
        if ($kochbuch->users_id == AUTH::user()->id || AUTH::user()->hasRole('admin')) {
            return view('kochbuecher.show', compact('kochbuch'));//->with('kochbuch', $kochbuch);
        } else {
            abort(401, 'Keine Berechtigung.');
        }
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
        // if ( AUTH::user()->hasRole('admin')) {
        $kochbuch = Kochbuch::find($kID);
        foreach ($kochbuch->rezepts as $rezept) {
            $kochbuch->rezepts()->detach($rezept);// deletes row from kochbuch_rezept table; it does not delete the rezept from rezepts table
        }
        $kochbuch->delete();
        Session::flash('alert-success', 'Kochbuch ' . $kochbuch->kName . ' wurde erfolgreich gelöscht.');
        return redirect()->action('KochbuchController@index');
        /*    } else {
        abort(401, 'This action is unauthorized.');
        }*/
    }
}
