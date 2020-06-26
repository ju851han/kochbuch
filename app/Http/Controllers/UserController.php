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
        if (AUTH::user()->hasRole('admin')) {
            $users = User::all();
            return view('users')->with('users', $users);
        } else {
            abort(401, 'This action is unauthorized.');
        }
    }

    /**
     * Destroy an User
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request, $id)
    {

        $user = User::find($id);
        if (is_null($user)) {
            return redirect()->action('UserController@index');
        } elseif (AUTH::user()->hasRole('admin')) {
            $user->delete();
            Session::flash('alert-success', 'Benutzer ' . $user->email . ' wurde erfolgreich gelöscht.');
            return redirect()->action('UserController@index');
        } else {
            abort(401, 'This action is unauthorized.');
        }
    }
}