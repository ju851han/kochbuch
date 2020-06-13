@extends('layouts.app')

@section('content')
    <div class="container">
        <section>
            <h2>Kochbuch erstellen</h2>
            <form method="post" action="/kochbuecher">
                @csrf
                <label for="kName">Name des Kochbuchs:</label>
                <input class="form-control" id="kName" name="kName" type="text" minlength="2" required><br>
                <input type="reset" class="abortbtn" value="Abbrechen"> <!-- reset = Formulardaten werden gelöscht-->
                <input type="submit" class="finishbtn" value="Kochbuch erstellen">
                {{--TODO add or create rezept--}}
            </form>
        </section>
    </div>
    <!-- Quelle https://www.w3schools.com/html/tryit.asp?filename=tryhtml_form_submit-->
@endsection