@extends('layouts.app_unlogged')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-12 col-md-8 offset-md-2">
                <h2>Kontakt</h2>
                <p>Haben Sie Fragen oder wollen Sie ein Feedback zur Web-Applikation "Kochplan" geben? <br>
                   Dann füllen Sie einfach das folgende Formularfelder aus:</p>
                {{-- https://html.form.guide/email-form/html-email-form/--}}
                <form method="POST" action="mailto:julia.hansi@htwg-konstanz.de" enctype="text/plain" onsubmit="check_email()">
                    <div class="form-group">
                        <label for="eMail">Ihre E-Mail Adresse:</label>
                        <input class="form-control" id="eMail" name="eMail" type="email" onchange="check_email()" required></div>
                    <div class="form-group">
                        <label for="betreff">Betreff:</label>
                        <input class="form-control" id="betreff" name="betreff" type="text" size="25" required></div>
                    <div class="form-group"><label for="text">Text:</label>
                        <textarea class="form-control" id="text" name="text" rows="5" cols="30"></textarea></div>
                    <br>
                    <input type="submit" class="normalbtn btn" value="Senden">
                    <input type="reset" class="abortbtn btn" onclick="window.location.href='/'" value="Abbrechen">
                </form>
            </section>
        </div>
    </div>
    <script>
        function check_email(){
            if(!$('#eMail').val().includes('.')){
                alert('Bitte geben Sie eine korrekte E-Mail-Addresse ein.')
            }
        }
    </script>
@endsection