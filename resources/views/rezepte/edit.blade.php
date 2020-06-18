@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-xs-auto col-md-8 offset-md-2">
                <h1>Rezept erstellen</h1>
                <p>Du bist gerade dabei dein Rezept zu erstellen. <br>
                    Bitte beschreibe nun die Zubereitungsschritte.</p>

                <form method="post" action="/rezepte/{{$r->rID}}/update">
                    @csrf
                    <div class="form-group">
                        <label for="rName">Name des Rezepts:</label>
                        <input class="form-control" id="rName" name="rName" type="text" required value="{{$r->rName}}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="zubereitung">Zubereitung</label><br>
                        <textarea id="zubereitung" name="zubereitung" minlength="20" maxlength="5000" cols="50" rows="5"
                                  required value="{{$r->zubereitung}}"></textarea><br>
                    </div>
                    <br>
                    <!-- TODO mehrere auswahlmöglichkeiten -->
                    <!-- TODO einfügen class="form-control" siehe create -->
                    <div class="form-group">
                        <label for="kategorie">Kategorien:</label>
                        <input class="form-control" id="kategorie" name="kategorie" type="text" minlength="2" required
                               value="{{$r->kategorie}}">
                        <!--  <span>Kategorien:</span>
                       <label for="Hauptspeise">Hauptspeise</label></br>
                         <input id="Hauptspeise" name="kategorie" type="checkbox" value="Hauptspeise">-->
                        <br>
                        <label for="zeit">Zeit</label>
                        <input class="form-control-range" id="zeit" name="zeit" list="zeiten" type="range" min="15"
                               max="240"
                               step="15"
                               onchange="updateTextInput(this.value);" required value="{{$r->zeit}}">
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
                        <br>
                        <output id="textOutput" for="zeit" type="text">135</output>
                        <span> min</span>
                    </div>
                    <br>
                    <!-- TODO muss ausgerechnet werden und automatisch weitergegeben werden -->
                    <div class="form-group">
                        <label for="kostenjePortion">Kosten je Portion</label>
                        <input class="form-control" id="kostenjePortion" name="kostenjePortion" type="number"
                               step="0.01"
                               required value="{{$r->kostenjePortion}}">
                    </div>
                    <br>
                    <input type="reset" class="abortbtn btn" value="Abbrechen"> <!-- reset = Formulardaten werden gelöscht-->
                    <input type="submit" class="normalbtn btn" value="Änderungen speichern">
                </form>
            </section>
        </div>
    </div>
    <script>
        function updateTextInput(val) {
            document.getElementById('textOutput').value = val;
        }
    </script>
@endsection