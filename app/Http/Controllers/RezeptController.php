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



}