@extends('layouts.app')

@section('content')
    <h1>Rezept erstellen</h1>
    <p>Du bist gerade dabei dein Rezept zu erstellen. <br>
        Bitte beschreibe nun die Zubereitungsschritte.</p>

    <form method="post" action="/rezepte/{{$r->rID}}/update">
    @csrf
        <label for="rName">Name des Rezepts:</label>
        <input id="rName" name="rName" type="text" required value="{{$r->rName}}">
        <br>
        <label for="zubereitung">Zubereitung</label><br>
        <textarea id="zubereitung" name="zubereitung" minlength="20" maxlength="5000" cols="50" rows="5"
                  required value="{{$r->zubereitung}}"></textarea><br>
        <br>
        <!-- TODO mehrere auswahlmöglichkeiten -->
        <label for="kategorie">Kategorien:</label>
        <input id="kategorie" name="kategorie" type="text" minlength="2" required value="{{$r->kategorie}}">
        <!--  <span>Kategorien:</span>
       <label for="Hauptspeise">Hauptspeise</label></br>
         <input id="Hauptspeise" name="kategorie" type="checkbox" value="Hauptspeise">-->
        <br>
        <!--TODO zeitanzeigen-->
        <label for="zeit">Zeit</label><!--TODO https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/time-->
        <input id="zeit" name="zeit" type="range" min="0" max="240" step="15" required value="{{$r->zeit}}">
        <br>
        <!-- TODO muss ausgerechnet werden und automatisch weitergegeben werden -->
        <label for="kostenjePortion">Kosten je Portion</label>
        <input id="kostenjePortion" name="kostenjePortion" type="number" step="0.01" required value="{{$r->kostenjePortion}}">
        <br>
        <input type="reset" value="Abbrechen"> <!-- reset = Formulardaten werden gelöscht-->
        <input type="submit" value="Bearbeiten">
    </form>

@endsection