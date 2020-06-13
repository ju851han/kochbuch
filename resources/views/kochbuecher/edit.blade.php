@extends('layouts.app')

@section('content')
    <div class="container">
        <section>
            <h2>Kochbuch bearbeiten</h2>
            <form method="post" action="/kochbuecher/{{$k->kID}}/update">
                @csrf
                <label for="kName">Name des Kochbuchs:</label>
                <input class="form-control" id="kName" name="kName" type="text" minlength="2" required
                       value="{{$k->kName}}"><br>
                <input type="reset" class="abortbtn" value="Abbrechen"> <!-- reset = Formulardaten werden gelöscht-->
                <input type="submit" class="normalbtn" value="Bearbeiten">
            </form>
        </section>
    </div>
    <!-- Quelle https://www.w3schools.com/html/tryit.asp?filename=tryhtml_form_submit-->
@endsection