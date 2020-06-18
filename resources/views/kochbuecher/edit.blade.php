@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-xs-auto col-md-8 offset-md-2">
                <h2>Kochbuch bearbeiten</h2>
                <form method="post" action="/kochbuecher/{{$k->kID}}/update">
                    @csrf
                    <div class="form-group">
                        <label for="kName">Name des Kochbuchs:</label>
                        <input class="form-control" id="kName" name="kName" type="text" minlength="2" required
                               value="{{$k->kName}}"><br>
                    </div>
                    <input type="reset" class="abortbtn btn" value="Abbrechen">
                    <!-- reset = Formulardaten werden gelöscht-->
                    <input type="submit" class="normalbtn btn" value="Änderungen speichern">
                </form>
            </section>
        </div>
    </div>
    <!-- Quelle https://www.w3schools.com/html/tryit.asp?filename=tryhtml_form_submit-->
@endsection