<?php


namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /** Shows all Users
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = User::all();
        return view('users')->with('users', $users);
    }

    /**
     * Destroy an User
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request, $id)
    {
        /*TODO authorized Role wo festzulegen?*/
        /*     $request->user()->authorizeRole('admin');*/
        $user = User::find($id);
        $user->delete();
        Session::flash('alert-success', 'Benutzer ' . $user->email . ' wurde erfolgreich gelöscht.');
        return redirect()->action('UserController@index');

    }
}