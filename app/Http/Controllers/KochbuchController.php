<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KochbuchController extends Controller
{
    /**
     * Shows all Kochbuecher
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $rows = DB::select('SELECT kid,kname FROM KOCHBUECHER');
        return view('kochbuecher/index')->with('kochbuecher', $rows);
    }

    /**
     * Shows a form to create a new Kochbuch
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('kochbuecher/create');
    }

    /**
     * Saved the new Kochbuch
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request){
        $rows = DB::insert('insert into KOCHBUECHER(kName,erstelltam, aktualisiertam) values (?, NOW(), NOW())', [$request->kName]);
        return redirect()->action('KochbuchController@index');
    }

    /**
     * Shows the update form for Kochbuch
     * @param $zName
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($kID)
    {
        $rows = DB::select('SELECT kID,kName FROM KOCHBUECHER WHERE kID= ?', [$kID]);
        if (count($rows)>0) {
            $kochbuch = $rows[0];
        }
        return view('kochbuecher/edit')->with('k',$kochbuch);
    }

    /**
     * Updates the Kochbuch
     * @param Request $request
     * @param $zName
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $kID)
    {
        $rows = DB::update('update KOCHBUECHER SET kName=? WHERE  kID=?', [$request->kName, $kID]);
        return redirect()->action('KochbuchController@show',['kid' => $kID]);
    }
}