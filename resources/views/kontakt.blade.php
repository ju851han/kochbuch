@extends('layouts.app_unlogged')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-xs-auto col-md-8 offset-md-2">
                <h2>Kontakt</h2>
                <p>Gerne stehen wir Ihnen für Fragen jederzeit zur Verfügung.</p>
                <!-- TODO Text hinzufügen-->
                <form method="POST" action=""> <!--TODO action="fehlt"-->
                    <div class="form-group">
                        <label for="eMail">Ihre E-Mail Adresse:</label>
                        <input class="form-control" id="eMail" name="eMail" type="email" required></div>
                    <div class="form-group">
                        <label for="betreff">Betreff:</label>
                        <input class="form-control" id="betreff" name="betreff" type="text" size="25"/></div>
                    <div class="form-group"><label for="text">Text:</label>
                        <textarea class="form-control" id="text" name="text" rows="5" cols="30"></textarea></div>
                    <input type="submit" class="normalbtn btn" value="Senden">
                    <input type="reset" class="abortbtn btn" value="Abbrechen">
                </form>
            </section>
        </div>
    </div>
    <!-- Quelle https://www.w3schools.com/html/tryit.asp?filename=tryhtml_form_submit-->
@endsection