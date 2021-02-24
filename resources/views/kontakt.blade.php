@extends('layouts.app_unlogged')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-12 col-md-8 offset-md-2">
                <h2>Kontakt</h2>
                <p>Haben Sie Fragen oder wollen Sie ein Feedback zur Web-Applikation "Kochplan" geben? <br>
                    Dann füllen Sie einfach das folgende Formularfelder aus:</p>
                <form method="post" action="/kontakt/send" {{--enctype="text/plain"--}} onsubmit="check_email()">
                    @csrf
                    <div class="form-group">
                        <label for="eMail">Ihre E-Mail Adresse:</label>
                        <input class="form-control" id="eMail" name="eMail" type="email" required></div>
                    <div class="form-group">
                        <label for="betreff">Betreff:</label>
                        <input class="form-control" id="betreff" name="betreff" type="text" size="25" required></div>
                    <div class="form-group">
                        <label for="text">Text:</label>
                        <textarea class="form-control" id="text" name="text" rows="5" cols="30"></textarea></div>
                    <br>
                    <input type="reset" class="abortbtn btn" onclick="window.location.href='/kontakt'" value="Abbrechen">
                    <input type="submit" class="normalbtn btn" value="Senden">
                </form>
            </section>
        </div>
    </div>
    <script>
        function check_email() {
            if (!$('#eMail').val().includes('.')) {
                alert('Bitte geben Sie eine korrekte E-Mail-Addresse ein.')
            }
        }
    </script>
@endsection