<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RezeptController extends Controller
{
    /**
     * Shows all Rezepte
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $rows = DB::select('SELECT rName, kategorie, zeit, kostenjePortion FROM REZEPTE');
        return view('rezepte/index')->with('rezepte', $rows);
    }

    /**
     * Shows a form to create a new Rezept
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('rezepte/create');
    }

    /**
     * Saved the new Rezept
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request){
        $rows = DB::insert('insert into REZEPTE(rName, zubereitung, kategorie, zeit, kostenjePortion) values (?, ?, ?, ?, ?)', [$request->rName, $request->zubereitung, $request->kategorie, $request->zeit, $request->kostenjePortion]);
        return redirect()->action('RezeptController@index');
    }

    /**
     * Shows one Rezept
     * @param $rid
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($rID)
    {
        $rows = DB::select('SELECT rID, rName, zubereitung, kategorie, zeit, kostenjePortion FROM REZEPTE WHERE rID= ?', [$rID]);
        if (count($rows)>0) {
            $rezept = $rows[0];
        }
        return view('rezepte/show')->with('r',$rezept);
    }
    /**
     * Shows the update form for Rezept
     * @param $rID
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($rID)
    {
        $rows = DB::select('SELECT rID, rName, zubereitung, kategorie, zeit, kostenjePortion FROM REZEPTE WHERE rID= ?', [$rID]);
        if (count($rows)>0) {
            $rezept = $rows[0];
        }
        return view('rezepte/edit')->with('r',$rezept);
    }

    /**
     * Updates the Rezept
     * @param Request $request
     * @param $rID
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $rID)
    {
        $rows = DB::update('update REZEPTE SET rName=?, zubereitung=?, kategorie=?, zeit=?, kostenjePortion=? WHERE  rID=?', [$request-> rName, $request->zubereitung, $request->kategorie, $request->zeit, $request->kostenjePortion,$rID]);
        return redirect()->action('RezeptController@show',['rID' => $rID]);
    }

}