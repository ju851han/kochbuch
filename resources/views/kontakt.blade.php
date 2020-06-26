@extends('layouts.app_unlogged')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-xs-auto col-md-8 offset-md-2">
                <h2>Kontakt</h2>
                <p>Haben Sie Fragen oder wollen Sie ein Feedback zur Web-Applikation "Kochplan" geben? <br>
                   Dann füllen Sie einfach das folgende Formularfelder aus:</p>
                {{--TODO https://html.form.guide/email-form/html-email-form/--}}
                <form method="POST" action="mailto:julia.hansi@htwg-konstanz.de" enctype="text/plain">
                    <div class="form-group">
                        <label for="eMail">Ihre E-Mail Adresse:</label>
                        <input class="form-control" id="eMail" name="eMail" type="email" required></div>
                    <div class="form-group">
                        <label for="betreff">Betreff:</label>
                        <input class="form-control" id="betreff" name="betreff" type="text" size="25" required></div>
                    <div class="form-group"><label for="text">Text:</label>
                        <textarea class="form-control" id="text" name="text" rows="5" cols="30"></textarea></div>
                    <br>
                    <input type="submit" class="normalbtn btn" value="Senden">
                    <input type="reset" class="abortbtn btn" value="Abbrechen">
                </form>
            </section>
        </div>
    </div>
    <!-- Quelle https://www.w3schools.com/html/tryit.asp?filename=tryhtml_form_submit-->
@endsection