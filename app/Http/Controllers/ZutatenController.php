<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ZutatenController extends Controller
{
    /**
     * Shows all Zutaten
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $rows = DB::select('SELECT zName, mengeneinheit, kostenJeEinheit, produktgruppe FROM ZUTATEN');
        return view('zutaten/index')->with('zutaten', $rows);
    }

    /**
     * Shows a form to create a new Zutaten
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('zutaten/create');
    }

    /**
     * Saved the new Zutaten
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request){
        $rows = DB::insert('insert into ZUTATEN(zName, mengeneinheit, kostenJeEinheit, produktgruppe) values (?, ?, ?, ?)', [$request->zName,$request->mengeneinheit, $request->kostenJeEinheit, $request->produktgruppe]);
        return redirect()->action('ZutatenController@index');
    }

}