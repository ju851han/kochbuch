<?php

namespace App\Http\Controllers;

use App\Kochbuch;
use App\Rezept;
use App\Zutat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
     * @param Request $request
     * @return \Illuminate\Http\Response
     */

    public function create_step2a(Request $request)
    {
        $validatedData = $request->validate([
            'kName' => 'required|alpha_num|min:2|max:125']);


        $kochbuch = new Kochbuch;
        $kochbuch->kName = $request->kName;
        $request->session()->put('kochbuch', $kochbuch);

        $rezepte = Rezept::all();
        return view('kochbuecher/create_step2a_addRezept')->with('rezepte', $rezepte);
    }

    /**
     * Create Rezept / Step2b_1: Create a new Kochbuch
     * @param Request $request
     * @return \Illuminate\Http\Response
     */

    public function create_step2b_1(Request $request)
    {
        $validatedData = $request->validate([
            'kName' => 'required|alpha_num|min:2|max:125']);
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
        $i = 1;
        $rules = array();
        while ($request->has('zName_' . $i)) {
            $rules['zName_' . $i] = 'required|string|min:2|max:256';
            $rules['menge_' . $i] = 'required|numeric';
            $i++;
        }

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
     * Step 3: Creating (Rezept|Kochbuch) and adding relations
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create_step3(Request $request)
    {
        if (!is_null($request->rID)) { //Rezepte will be added to Kochbuch
            $rIDs = explode(',', $request->rIDs); //rIDs = parse text into array
            $max = sizeof($rIDs);

            $rezepte = array();
            for ($i = 0; $i < $max; $i++) {
                $rezept = Rezept::where('rID', $rIDs[$i])->first();
                $rezepte[] = $rezept;
            }
            $request->session()->put('rezepte', $rezepte);
            $kochbuch = $request->session()->get('kochbuch');
            return view('kochbuecher/create_step3_overview')->with('kochbuch', $kochbuch)->with('rezepte', $rezepte);
        } elseif (!is_null($request->rName)) { //Rezept for new Kochbuch will be created
            $validatedData = $request->validate([
                'rName' => 'required|alpha_num|min:1|max:125|unique:rezepts',
              'kategorie' => 'required|string',
                'zeit' => 'required|numeric'
            ]);
            $rezept = new Rezept;
            $rezept->rName = $request->rName;
            $rezept->zubereitung = $request->zubereitung;
            $rezept->kategorie = $request->kategorie;
            $rezept->zeit = $request->zeit;
            $rezept->kostenjePortion = $request->session()->get('kostenjePortion');
            $request->session()->put('rezept', $rezept);
            $zutaten = $request->session()->get('zutaten');
            $kochbuch = $request->session()->get('kochbuch');

            return view('kochbuecher/create_step3_overview')->with('kochbuch', $kochbuch)->with('rezept', $rezept)->with('zutaten', $zutaten);
        } else { //Only Kochbuch will be created
            $kochbuch = new Kochbuch;
            $kochbuch->kName = $request->kName;
            $request->session()->put('kochbuch', $kochbuch);
            return view('kochbuecher/create_step3_overview')->with('kochbuch', $kochbuch)->with('rezept', null);
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

        if (!is_null($request->session()->get('zutaten'))) { //Rezept for new Kochbuch is created
            $kochbuch = $request->session()->get('kochbuch');
            $rezept = $request->session()->get('rezept');
            $zutaten = $request->session()->get('zutaten');
            $kochbuch->users()->associate(Auth::user()); //add entry users_id in Table kochbuches
            $rezept->save();
            foreach ($zutaten as $zutat) {
                $rezept->zutats()->attach($zutat->zName, ['menge' => $zutat->menge]); //add entry in Table rezept_zutat
            }

            $kochbuch->save();
            $kochbuch->rezepts()->attach($rezept->rID); //add entry in Table kochbuch_rezept
            return redirect()->action('KochbuchController@index');
        } elseif (!is_null($request->session()->get('rezepte'))) { //Rezepte are added to Kochbuch
            $kochbuch = $request->session()->get('kochbuch');
            $rezepte = $request->session()->get('rezepte');

            $kochbuch->users()->associate(Auth::user()); //add entry users_id in Table kochbuches
            $kochbuch->save();

            foreach ($rezepte as $rezept) {
                $rezept->save();
                $kochbuch->rezepts()->attach($rezept->rID); //add entry in Table kochbuch_rezept
            }
            return redirect()->action('KochbuchController@index');
        } else { //Only Kochbuch is created
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
        } elseif ($kochbuch->users_id == AUTH::user()->id || AUTH::user()->hasRole('admin')) {
            return view('kochbuecher.show', compact('kochbuch'));//->with('kochbuch', $kochbuch);
        } else {
            return abort(401, 'Es ist keine Berechtigung fürs Anzeigen dieses Kochbuches vorhanden.');
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
        $kochbuch = Kochbuch::find($kID);
        if (is_null($kochbuch)) {
            return redirect()->action('KochbuchController@index');
        } elseif ($kochbuch->users_id == AUTH::user()->id || AUTH::user()->hasRole('admin')) {
            return view('kochbuecher/edit_step1')->with('kochbuch', $kochbuch);
        } else {
            return abort(401, 'Es ist keine Berechtigung fürs Ändern eines Kochbuches vorhanden.');
        }
    }

    /**
     * @param Request $request
     * @param $kID
     * @return \Illuminate\Http\Response
     */
    public function edit_step2(Request $request, $kID)
    {
        $kochbuch = Kochbuch::find($kID);

        if (is_null($kochbuch)) {
            return redirect()->action('KochbuchController@index');
        } elseif ($kochbuch->users_id == AUTH::user()->id || AUTH::user()->hasRole('admin')) {
            $rezepte = DB::select(DB::raw("SELECT * FROM rezepts WHERE NOT EXISTS (SELECT * FROM kochbuch_rezept where kochbuch_rezept.kochbuch_kID=1 AND kochbuch_rezept.rezept_rID=rezepts.rID);"));
            return view('kochbuecher/edit_step2_addRezept')->with('rezepte', $rezepte)->with('kochbuch', $kochbuch);
        } else {
            return abort(401, 'Es ist keine Berechtigung fürs Ändern eines Kochbuches vorhanden.');
        }
    }

    /**
     * Delete the link between Rezept and Kochbuch in PivotTable kochbuch_rezept
     * @param Request $request
     * @param $kID
     * @param $rID
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function edit_step3(Request $request, $kID, $rID)
    {
        $kochbuch = Kochbuch::find($kID);
        $rezept = Rezept::find($rID);

        if (is_null($kochbuch) || is_null($rezept)) {
            return redirect()->action('KochbuchController@index');
        } else if ($kochbuch->users_id == AUTH::user()->id || AUTH::user()->hasRole('admin')) {
            $kochbuch->rezepts()->detach($rezept);// deletes row from kochbuch_rezept table; it does not delete the rezept from rezepts table
            $kochbuch->touch();// updates the updated_at column
            return view('kochbuecher/edit_step1')->with('kochbuch', $kochbuch);
        } else {
            return abort(401, 'Es ist keine Berechtigung fürs Ändern eines Kochbuches vorhanden.');
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
        $kochbuch = Kochbuch::find($kID);

        if (is_null($kochbuch)) {
            return redirect()->action('KochbuchController@index');
        } elseif ($kochbuch->users_id == AUTH::user()->id || AUTH::user()->hasRole('admin')) {
            $rIDs = explode(',', $request->rIDs); //rIDs = parse text into array
            $max = sizeof($rIDs);

            $rezepte = array();
            for ($i = 0; $i < $max; $i++) {
                $rezept = Rezept::where('rID', $rIDs[$i])->first();
                $rezepte[] = $rezept;
            }

            foreach ($rezepte as $rezept) {
                $kochbuch->rezepts()->attach($rezept->rID); //add entry in Table kochbuch_rezept
            }
            $kochbuch->touch();// updates the updated_at column
            return redirect()->action('KochbuchController@show', ['kID' => $kID]);
        } else {
            return abort(401, 'Es ist keine Berechtigung fürs Ändern eines Kochbuches vorhanden.');
        }
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

        $kochbuch = Kochbuch::find($kID);
        if (is_null($kochbuch)) {
            return redirect()->action('KochbuchController@index');
        } elseif (AUTH::user()->hasRole('admin')) {
            foreach ($kochbuch->rezepts as $rezept) {
                $kochbuch->rezepts()->detach($rezept);// deletes row from kochbuch_rezept table; it does not delete the rezept from rezepts table
            }
            $kochbuch->delete();
            Session::flash('alert-success', 'Kochbuch ' . $kochbuch->kName . ' wurde erfolgreich gelöscht.');
            return redirect()->action('KochbuchController@index');
        } else {
            return abort(401, 'Es ist keine Berechtigung fürs Löschen eines Kochbuches vorhanden.');
        }
    }
}
