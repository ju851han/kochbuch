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
        <input id="zeit" name="zeit" list="zeiten" type="range" min="15" max="240" step="15"
               onchange="updateTextInput(this.value);" required>
        {{--https://stackoverflow.com/questions/10004723/html5-input-type-range-show-range-value--}}
        {{--https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_js_rangeslider--}}
        {{--https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/range--}}
        {{--https://wiki.selfhtml.org/wiki/HTML/Formulare/Ergebnisausgabe--}}
        <datalist id="zeiten">
            <option value="15"></option>
            <option value="30"></option>
            <option value="45"></option>
            <option value="60"></option>
            <option value="75"></option>
            <option value="90"></option>
            <option value="105"></option>
            <option value="120" label="120 min"></option>
            <option value="135"></option>
            <option value="150"></option>
            <option value="165"></option>
            <option value="180"></option>
            <option value="195"></option>
            <option value="210"></option>
            <option value="225"></option>
            <option value="240" label="240 min"></option>
        </datalist>
        <output id="textOutput" for="zeit" type="text">135</output>
        <span> min</span>
        <br>
        <!-- TODO muss ausgerechnet werden und automatisch weitergegeben werden -->
        <label for="kostenjePortion">Kosten je Portion</label>
        <input id="kostenjePortion" name="kostenjePortion" type="number" step="0.01" required value="{{$r->kostenjePortion}}">
        <br>
        <input type="reset" value="Abbrechen"> <!-- reset = Formulardaten werden gelöscht-->
        <input type="submit" value="Bearbeiten">
    </form>
    <script>
        function updateTextInput(val) {
            document.getElementById('textOutput').value = val;
        }
    </script>
@endsection