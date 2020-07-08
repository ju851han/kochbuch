<?php

namespace App\Http\Controllers;

use App\Rezept;
use App\Zutat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ZutatController extends Controller
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
     * Shows all Zutaten
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (AUTH::user()->hasRole('admin')) {
            $zutaten = Zutat::paginate(10);
            return view('zutaten/index')->with('zutaten', $zutaten);
        } else {
            return abort(401, 'Es ist keine Berechtigung fürs Ansehen aller Zutaten vorhanden.');
        }
    }


    public function indexJson(Request $request, $rID){
        $rezept=Rezept::find($rID);
        $z1 = $rezept->zutats()->get();

        $zutaten=array();
        foreach($z1 as $zutat){
            $zutat->menge=$rezept->zutats()->where('zutat_zName',$zutat->zName)->first()->pivot->menge;
            $zutaten[]=$zutat;
        }


        return response()->json($zutaten);
    }
    /**
     * Shows a form to create a new Zutat
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if (AUTH::user()->hasRole('admin')) {
            return view('zutaten/create');
        } else {
            return abort(401, 'Es ist keine Berechtigung fürs Erstellen einer Zutat vorhanden.');
        }
    }

    /**
     * Saved the new Zutat in DB
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (AUTH::user()->hasRole('admin')) {
            $validatedData = $request->validate([
                'zName'=>'required|min:2|max:256|string|unique:zutats',
                'mengeneinheit'=>'required|string|min:1|max:20',
                'kostenJeEinheit'=>'required|numeric',
                'produktgruppe'=>'required|string|max:125'
            ]);
            $zutat = new Zutat;
            $zutat->zName = $request->zName;
            $zutat->kostenJeEinheit = $request->kostenJeEinheit;
            $zutat->mengeneinheit = $request->mengeneinheit;
            $zutat->produktgruppe = $request->produktgruppe;
            $zutat->save();

            return redirect()->action('ZutatController@index');
        } else {
            return abort(401, 'Es ist keine Berechtigung fürs Speeichern einer Zutat vorhanden.');
        }
    }

    /**
     * Shows one Zutat
     *
     * @param $zName
     * @return \Illuminate\Http\Response
     */
    public function show($zName)
    {

        $zutat = Zutat::find($zName);
        if (is_null($zutat)) {
            return redirect()->action('ZutatController@index');
        } elseif (AUTH::user()->hasRole('admin')) {
            return view('zutaten/show')->with('z', $zutat);
        } else {
            return abort(401, 'Es ist keine Berechtigung fürs Anzeigen einer Zutat vorhanden.');
        }
    }

    /**
     * Shows a form to update a Zutat
     *
     * @param Request $request
     * @param $zName
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $zName)
    {
        $zutat = Zutat::find($zName);
        if (is_null($zutat)) {
            return redirect()->action('ZutatController@index');
        } elseif (AUTH::user()->hasRole('admin')) {
            return view('zutaten/edit')->with('z', $zutat);
        } else {
            return abort(401, 'Es ist keine Berechtigung fürs Bearbeiten einer Zutat vorhanden.');
        }
    }

    /**
     * Updates the edited Zutat in DB
     *
     * @param  \Illuminate\Http\Request $request
     * @param $zName
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $zName)
    {
        $validatedData = $request->validate([
            'zName'=>'required|string|min:2|max:256',
            'mengeneinheit'=>'required|string|min:1|max:20',
            'kostenjeEinheit'=>'required|numeric',
            'produktgruppe'=>'required|string|max:125'
        ]);
        $zutat = Zutat::find($zName);
        if (is_null($zutat)) {
            return redirect()->action('ZutatController@index');
        } elseif (AUTH::user()->hasRole('admin')) {
            $zutat->kostenjeEinheit = $request->kostenjeEinheit;
            $zutat->mengeneinheit = $request->mengeneinheit;
            $zutat->produktgruppe = $request->produktgruppe;
            $zutat->save();
            return redirect()->action('ZutatController@show', ['zName' => $zName]);
        } else {
            return abort(401, 'Es ist keine Berechtigung fürs Bearbeiten einer Zutat vorhanden.');
        }

    }

    /**
     * Destroy the specified Zutat from DB
     *
     * @param Request $request
     * @param $zName
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $zName)
    {
        $zutat = Zutat::find($zName);
        if (is_null($zutat)) {
            return redirect()->action('ZutatController@index');
        } elseif (AUTH::user()->hasRole('admin')) {
            foreach ($zutat->rezepts as $rezept) {
                $zutat->rezepts()->detach($rezept); // deletes row from rezept_zutat table; it does not delete the zutats from zutat table
            }
            $zutat->delete();
            Session::flash('alert-success', 'Zutat ' . $zutat->zName . ' wurde erfolgreich gelöscht.');
            return redirect()->action('ZutatController@index');
        } else {
            return abort(401, 'Es ist keine Berechtigung fürs Löschen einer Zutat vorhanden.');
        }
    }
}
