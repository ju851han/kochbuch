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
     * Access: Admin sees all Kochbuecher; Koch sees only his Kochbuecher
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
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('kochbuecher/create_step1_Kochbuch');
    }

    /**
     * Create Rezept / Step2b_1: Create a new Kochbuch
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function create_step2b_1(Request $request)
    {
        $kochbuch = new Kochbuch;
        $kochbuch->kName = $request->kName;
        $request->session()->put('kochbuch', $kochbuch);

        $zutaten = Zutat::all()->sortBy('zName'); //For select options
        return view('kochbuecher/create_step2b_1_addZutaten')->with('zutaten', $zutaten);
    }

    /**
     * Create Rezept / Step 2b_2: Add zutaten
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function create_step2b_2(Request $request)
    {
        /*TODO Validation */
        $zutaten = array();
        $i = 1;

        while ($request->has('zName_' . $i)) {
            $zutat = Zutat::where('zName', $request->input("zName_" . $i))->first();
            $zutat->menge = $request->input("menge_" . $i);
            $zutaten[] = $zutat;

            $i++;
        }

        $request->session()->put('zutaten', $zutaten);
        $kostenjePortion = $request->kostenjePortion;
        $request->session()->put('kostenjePortion', $kostenjePortion);

        return view('kochbuecher/create_step2b_2_createRezept');
    }


    /**
     * Create Rezept / Step 3: Show new Kochbuch
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create_step3(Request $request)
    {
        if (!is_null($request->rName)) {
            $rezept = new Rezept;
            $rezept->rName = $request->rName;
            $rezept->zubereitung = $request->zubereitung;
            $rezept->kategorie = $request->kategorie;
            $rezept->zeit = $request->zeit;
            $rezept->kostenjePortion = $request->session()->get('kostenjePortion');
            $request->session()->put('rezept', $rezept);
            $zutat = $request->session()->get('zutat');
            $kochbuch = $request->session()->get('kochbuch');
            return view('kochbuecher/create_step3_overview')->with('kochbuch', $kochbuch)->with('rezept', $rezept)->with('zutat', $zutat);

        } else {
            $kochbuch = new Kochbuch;
            $kochbuch->kName = $request->kName;
            $request->session()->put('kochbuch', $kochbuch);

            return view('kochbuecher/create_step3_overview')->with('kochbuch', $kochbuch)->with('rezept',null);
        }
    }

    /**
     * Saved the new Kochbuch in DB
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!is_null($request->session()->get('rezept'))){
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
        }else{
            $kochbuch = $request->session()->get('kochbuch');
            $kochbuch->users()->associate(Auth::user()); //add entry users_id in Table kochbuches
            $kochbuch->save();
            return redirect()->action('KochbuchController@index');
        }
    }

    /**
     * Shows one Kochbuch
     * Access: The Kochbuch is shown for Admin or Owner of this Kochbuch
     * @param $kID
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $kID)
    {
        $kochbuch = Kochbuch::find($kID);
        if (is_null($kochbuch)) {
            return redirect()->action('KochbuchController@index');
        } else if ($kochbuch->users_id == AUTH::user()->id || AUTH::user()->hasRole('admin')) {
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
        } else if ($kochbuch->users_id == AUTH::user()->id || AUTH::user()->hasRole('admin')) {
            return view('kochbuecher/edit')->with('k', $kochbuch);
        } else {
            abort(401, 'Keine Berechtigung.');
        }

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
     * Access: Only Admin can destroy a Kochbuch
     * @param Request $request
     * @param $kID
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $kID)
    {
        if (AUTH::user()->hasRole('admin')) {
            $kochbuch = Kochbuch::find($kID);
            foreach ($kochbuch->rezepts as $rezept) {
                $kochbuch->rezepts()->detach($rezept);// deletes row from kochbuch_rezept table; it does not delete the rezept from rezepts table
            }
            $kochbuch->delete();
            Session::flash('alert-success', 'Kochbuch ' . $kochbuch->kName . ' wurde erfolgreich gelöscht.');
            return redirect()->action('KochbuchController@index');
        } else {
            abort(401, 'This action is unauthorized.');
        }
    }
}
