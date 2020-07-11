<?php

namespace App\Http\Controllers;

use App\Rezept;
use App\Wochenkochplan;
use App\Zutat;
use Illuminate\Support\Facades\Session;
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
        $w1 = Wochenkochplan::where('users_id', AUTH::user()->id)->get();
        if (count($w1) <= 0) {

            foreach (array("Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag", "Sonntag") as $i) {
                $w = new Wochenkochplan;
                $w->users()->associate(Auth::user());
                $w->wochentag = $i;
                $w->save();
            }

            $wochenkochplan = Wochenkochplan::where('users_id', AUTH::user()->id)->get();
            $rezepte = null;
        } else {
            $wochenkochplan = $w1;
            $rezepte = array();
            foreach ($wochenkochplan as $w) {
                $r = Rezept::find($w->rezepts_rID);
                $rezepte[] = $r;
            }
        }

        return view('wochenkochplan/edit')->with('wochenkochplan', $wochenkochplan)->with('rezepte', $rezepte);
    }


    /**
     * Add Rezept to Wochenkochplan
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addRezept(Request $request, $id)
    {
        $rezepte = Rezept::all();
        $wochenkochplan = Wochenkochplan::find($id);
        return view('wochenkochplan/addRezept')->with('wochenkochplan', $wochenkochplan)->with('rezepte', $rezepte);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Wochenkochplan $wochenkochplan
     * @return \Illuminate\Http\Response
     */
    public function updateRezept(Request $request, $id)
    {
        $wochenkochplan = Wochenkochplan::find($id);
        $rezept = Rezept::find($request->rID);
        $wochenkochplan->rezepts()->associate($rezept);
        $wochenkochplan->save();
        return redirect()->action('WochenkochplanController@edit');
    }


    /**
     * Emptying the Wochenkochplan
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $wochenkochplan = Wochenkochplan::where('users_id', AUTH::user()->id)->get();
        if (!is_null($wochenkochplan)) {
            foreach ($wochenkochplan as $w) {
                $w->delete();
            }

            Session::flash('alert-success', 'Wochenkochplan wurde erfolgreich entleert.');
        }
        return redirect()->action('WochenkochplanController@edit');
    }

    public function einkaufsliste()
    {
        $wochenkochplan = Wochenkochplan::where('users_id', AUTH::user()->id)->get();
         $backwaren = array();
        $fisch = array();
        $fleisch = array();
        $gewuerze = array();
        $grundnahrungsprodukt =array();
        $obst = array();
        $milchprodukt = array();
        $sonstige = array();
        foreach ($wochenkochplan as $w) {
            $rezept = Rezept::find($w->rezepts_rID);
            if (!is_null($rezept)) {
                foreach ($rezept->zutats as $zutat) {
                    $z = Zutat::where('zName', $zutat->zName)->first();
                    switch ($z->produktgruppe) {
                        case "Backwaren":
                            $backwaren[] = $z->zName;
                            break;
                        case "Fisch & Meeresfrüchte":
                            $fisch[] = $z->zName;
                            break;
                        case "Fleisch":
                            $fleisch[] = $z->zName;
                            break;
                        case "Grundnahrungsprodukt":
                            $grundnahrungsprodukt[] = $z->zName;
                            break;
                        case "Gewürze":
                            $gewuerze[] = $z->zName;
                            break;
                        case "Obst & Gemüse":
                            $obst[] = $z->zName;
                            break;
                        case "Milchprodukt":
                            $milchprodukt[] = $z->zName;
                            break;
                        default:
                            $sonstige[] = $z->zName;
                    }
                }
            }
        }
        return view('einkaufsliste')->with('backwaren', $backwaren)->with('fisch', $fisch)->with('fleisch', $fleisch)->with('obst', $obst)->with('milchprodukt', $milchprodukt)->with('sonstige',$sonstige)->with('gewuerze',$gewuerze)->with('grundnahrungsprodukt',$grundnahrungsprodukt);
    }
}
