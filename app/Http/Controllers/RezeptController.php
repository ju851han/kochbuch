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
        $rows = DB::select('SELECT rname, kategorie, zeit, kostenjeportion FROM REZEPTE');
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

}