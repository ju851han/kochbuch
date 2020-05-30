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

}