<?php

namespace App\Http\Controllers;

use App\Rezept;
use App\Zutat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RezeptController extends Controller
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
     * Shows all Rezepte
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rezepte = Rezept::all();
        return view('rezepte/index')->with('rezepte', $rezepte);
    }

    /**
     * Shows a form to create a new Rezepte
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        /*   $rezept = new Rezept;
           $rezept->rName='Mein Rezept';
           $rezept->zubereitung='blablablablablablablablablablablablablablablablablabla';
           $rezept->kategorie='Pasta';
           $rezept->zeit=15;
           $rezept->kostenjePortion=10;
           $rezept->save();

           $zutat=Zutat::find('werq');
           $rezept->zutats()->attach($zutat);
           return 'Success';*/
        return view('rezepte/create_step1_addZutaten');
    }

    /**
     * Create Rezept / Step 2: Add Zutat
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function create_step2(Request $request)
    {
        $zutat = new Zutat;
        $zutat->zName = $request->zName;
        $zutat->mengeneinheit = $request->mengeneinheit;
        $zutat->kostenJeEinheit = $request->kostenJeEinheit;
        $zutat->produktgruppe = $request->produktgruppe;
        $request->session()->put('zutat', $zutat);

        $menge=$request->menge;
        $request->session()->put('menge', $menge);
        return view('rezepte/create_step2_Rezept');
    }

    /**
     * Create Rezept / Step 3: Add remaining Rezeptdata
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function create_step3(Request $request)
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
        return view('rezepte/create_step3_overview')->with('rezept', $rezept)->with('zutat', $zutat)->with('menge',$menge);
    }

    /**
     * Saved the new Rezepte in DB with the stored Data in Session
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rezept = $request->session()->get('rezept');
        $zutat = $request->session()->get('zutat');
        $menge = $request->session()->get('menge');
        /*     error_log($request->zName);
             error_log($zutat->zName);*/
        error_log($menge);
        $rezept->save();
        $rezept->zutats()->attach($zutat->zName,['menge'=>$menge]); //add entry in Table rezept_zutat
        $zutat->save();

        return redirect()->action('RezeptController@index');
    }

    /**
     * Shows one Rezept
     *
     * @param $rID
     * @return \Illuminate\Http\Response
     */
    public function show($rID)
    {
        $rezept = Rezept::find($rID);
        if (is_null($rezept)) {
            return redirect()->action('RezeptController@index');
        }
        return view('rezepte.show', compact('rezept'));
    }

    /**
     * Shows a form to update a Rezept
     *
     * @param Request $request
     * @param $rID
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $rID)
    {
        /*TODO authorized Role wo festzulegen?*/
        /*     $request->user()->authorizeRole('logged_user');*/
        $rezept = Rezept::find($rID);
        if (is_null($rezept)) {
            return redirect()->action('RezeptController@index');
        }
        return view('rezepte/edit')->with('r', $rezept);

    }

    /**
     * Updates the edited Rezept in DB
     *
     * @param  \Illuminate\Http\Request $request
     * @param $rID
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rID)
    {
        /*TODO authorized Role wo festzulegen?*/
        /*     $request->user()->authorizeRole('logged_user');*/
        $rezept = Rezept::find($rID);
        /*TODO Validation */
        $rezept->rName = $request->rName;
        $rezept->kategorie = $request->kategorie;
        $rezept->zeit = $request->zeit;
        $rezept->kostenjePortion = $request->kostenjePortion;
        $rezept->zubereitung = $request->zubereitung;
        $rezept->save();
        return redirect()->action('RezeptController@show', ['rID' => $rID]);
    }

    /**
     * Destroy the specified Rezept from DB
     *
     * @param Request $request
     * @param $rID
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $rID)
    {
        // if ( AUTH::user()->hasRole('admin')) {
        $rezept = Rezept::find($rID);
        foreach ($rezept->zutats as $zutat) {
            $rezept->zutats()->detach($zutat); // deletes row from rezept_zutat table; it does not delete the zutats from zutat table
        }
        $rezept->delete();
        Session::flash('alert-success', 'Rezept ' . $rezept->rName . ' wurde erfolgreich gelöscht.');
        return redirect()->action('RezeptController@index');
        /*    } else {
        abort(401, 'This action is unauthorized.');
        }*/
    }
}
