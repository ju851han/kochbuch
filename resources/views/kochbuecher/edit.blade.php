@extends('layouts.app')

@section('content')
    <h2>Kochbuch erstellen</h2>
    <form method="post" action="/kochbuecher/{{$k->kID}}/update">
        @csrf
        <label for="kName">Name des Kochbuchs:</label>
        <input id="kName" name="kName" type="text" minlength="2" required value="{{$k->kName}}"><br>
        <input type="reset" value="Abbrechen"> <!-- reset = Formulardaten werden gelöscht-->
        <input type="submit" value="Bearbeiten">
    </form>
    <!-- Quelle https://www.w3schools.com/html/tryit.asp?filename=tryhtml_form_submit-->
@endsection