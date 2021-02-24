<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function send(Request $request){

/*        $validatedData = $request->validate([
            'eMail'=>'required|email:rfc',
            'betreff'=>'required|alpha_dash',
            'text'=>'required|alpha_dash']);*/
//        https://html.form.guide/email-form/html-email-form/

//        error_log('hallooooooooooooooooooooooooooo');
        $email_from='ju851han@htwg-konstanz.de';
        $email_subject="Kochbuch";
        $email_body="Hallo, \n du hast eine neue Nachricht erhalten.\n
        Absender: ".$request->eMail."\n
        Betreff: ".$request->betreff."\n
        Text: \n".$request->text;
        $to='ju851han@htwg-konstanz.de';
        $headers="From:".$email_from."\r\n ";
//        https://stackoverflow.com/questions/21836282/php-function-mail-isnt-working/21836788
        mail($to,$email_subject,$email_body,$headers);
        return view('kontakt');
    }
}
