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



}