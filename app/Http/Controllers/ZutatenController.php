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
     * Shows a form to create a new Zutat
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('zutaten/create');
    }

    /**
     * Saves the new Zutat
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request){
        $rows = DB::insert('insert into ZUTATEN(zName, mengeneinheit, kostenJeEinheit, produktgruppe) values (?, ?, ?, ?)', [$request->zName,$request->mengeneinheit, $request->kostenJeEinheit, $request->produktgruppe]);
        return redirect()->action('ZutatenController@index');
    }

    /**
     * Shows the update form for Zutat
     * @param $zName
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($zName)
    {
        $rows = DB::select('SELECT zName, mengeneinheit, kostenJeEinheit, produktgruppe FROM ZUTATEN WHERE zName= ?', [$zName]);
        if (count($rows)>0) {
            $zutat = $rows[0];
        }
        return view('zutaten/edit')->with('z',$zutat);
    }

    /**
     * Updates the Zutat
     * @param Request $request
     * @param $zName
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $zName)
    {
        $rows = DB::update('update ZUTATEN SET mengeneinheit=?,kostenJeEinheit=?,produktgruppe=? WHERE  zName=?', [$request->mengeneinheit, $request->kostenJeEinheit, $request->produktgruppe,$zName]);
        return redirect()->action('ZutatenController@show',['zName' => $zName]);
    }

}