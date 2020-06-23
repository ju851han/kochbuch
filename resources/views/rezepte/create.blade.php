@extends('layouts.app')
/*TODO löschen*/
@section('content')
    <div class="container">
        <div class="row">
            <section class="col-xs-auto col-md-8 offset-md-2">
                <h1>Rezept erstellen</h1>
                <form method="post" action="/rezepte">
                    @csrf
                    <div class="form-group">
                        <label for="rName">Name des Rezepts:</label>
                        <input class="form-control" id="rName" name="rName" type="text" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="zubereitung">Beschreibe bitte die Zubereitungschritte des Gerichts:</label><br>
                        <textarea class="form-control" id="zubereitung" name="zubereitung" minlength="20"
                                  maxlength="5000"
                                  cols="50" rows="5"
                                  required></textarea><br>
                    </div>
                    <br>
                    <div class="form-group" onchange="kategory()">
                        <label for="kategorie">Wähle die Kategorien aus, zu denen das Rezept passt:</label>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" id="Pasta" name="Pasta" type="checkbox" value="Pasta">
                            <label class="form-check-label" for="Pasta">Pasta</label></div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" id="Fleisch" name="Fleisch" type="checkbox"
                                   value="Fleisch">
                            <label class="form-check-label" for="Fleisch">Fleisch</label></div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" id="Fisch" name="Fisch" type="checkbox" value="Fisch">
                            <label class="form-check-label" for="Fisch">Fleisch</label></div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" id="Snacks" name="Snacks" type="checkbox" value="Snacks">
                            <label class="form-check-label" for="Snacks">Snacks</label></div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" id="Vegetarisch" name="Vegetarisch" type="checkbox"
                                   value="Vegetarisch">
                            <label class="form-check-label" for="Vegetarisch">Vegetarisch</label></div>
                        {{--https://stackoverflow.com/questions/16167675/return-the-value-of-a-js-function-and-use-it-as-the-value-for-an-input-button--}}
                        <input type="hidden" id="kategorie" name="kategorie" value="">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="zeit">Bitte gebe die ungefähre Gesamtzeit in Minuten an, wie lange dein Gericht
                            benötigt?</label>
                        <p class="untertitel">(inkl. Zubereitungszeit und Koch-, Back- bzw. Grillzeit)</p>
                        <input class="form-control-range" id="zeit" name="zeit" list="zeiten" type="range" min="15"
                               max="240"
                               step="15"
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
                        <br>
                        <output id="textInput" for="zeit" type="text">135</output>
                        <span> min</span>
                    </div>
                    <br>
                    <!-- TODO muss ausgerechnet werden und automatisch weitergegeben werden (input type=hidden) -->
                    <div class="row form-group">
                        <label for="kostenjePortion">Kosten je Portion:</label>
                        <input class="form-control col-md-7 order-1" id="kostenjePortion"
                               name="kostenjePortion" type="number" step="0.01"
                               required>
                        <label class="col-md-1 order-2">€</label>
                    </div>
                    <br>
                    <input type="reset" class="abortbtn btn" value="Abbrechen">
                    <!-- reset = Formulardaten werden gelöscht-->
                    <input type="submit" class="normalbtn btn" value="Rezept erstellen">
                </form>
            </section>
        </div>
    </div>
    <script>
        function updateTextInput(val) {
            document.getElementById('textInput').value = val;
        }
        function kategory() {
            var txt = "";
            if (document.getElementById('Pasta').checked) {
                txt = txt + " Pasta";
            }
            if (document.getElementById('Fisch').checked) {
                txt = txt + " Fisch";
            }
            if (document.getElementById('Fleisch').checked) {
                txt = txt + " Fleisch";
            }
            if (document.getElementById('Snacks').checked) {
                txt = txt + " Snacks";
            }
            if (document.getElementById('Vegetarisch').checked) {
                txt = txt + " Vegetarisch";
            }
            document.getElementById('kategorie').value = txt;
        }

    </script>
@endsection