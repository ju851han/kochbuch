@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-12 col-md-8 offset-md-2">
                <h2>Rezept bearbeiten</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">1. Zutaten bearbeiten</li>
                        <li class="breadcrumb-item active" aria-current="page">2. Rezeptdaten bearbeiten</li>
                    </ol>
                </nav>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="get" action="/rezepte/{{$r->rID}}/update">
                    @csrf
                    <div class="form-group">
                        <label for="rName">Name des Rezepts:</label>
                        <input class="form-control" id="rName" name="rName" type="text" required value="{{$r->rName}}">
                    </div>
                    <div class="form-group">
                        <label for="zubereitung">Beschreibe bitte die Zubereitungschritte des Gerichts:</label><br>
                        <textarea class="form-control" id="zubereitung" name="zubereitung" minlength="20"
                                  maxlength="5000"
                                  cols="50" rows="5"
                                  required>"{{$r->zubereitung}}"</textarea><br>
                    </div>
                    <div class="form-group" onchange="kategory();"
                         onloadstart="startUpdateKategory();">{{--TODO testen ob onload start richtige eigenschaft ist--}}
                        <label for="kategorie">Wähle die Kategorien aus, zu denen das Rezept passt:</label>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" id="Pasta" name="Pasta" type="checkbox" value="Pasta"
                                   @if(strpos($r->kategorie,"Pasta")!==false) checked @endif>
                            <label class="form-check-label" for="Pasta">Pasta</label></div>
                        <div class="form-check">
                            <input class="form-check-input" id="Fleisch" name="Fleisch" type="checkbox" value="Fleisch"
                                   @if(strpos($r->kategorie,"Fleisch")!==false) checked @endif>
                            <label class="form-check-label" for="Fleisch">Fleisch</label></div>
                        <div class="form-check">
                            <input class="form-check-input" id="Fisch" name="Fisch" type="checkbox" value="Fisch"
                                   @if(strpos($r->kategorie,"Fisch")!==false) checked @endif>
                            <label class="form-check-label" for="Fisch">Fisch</label></div>
                        <div class="form-check">
                            <input class="form-check-input" id="Snacks" name="Snacks" type="checkbox" value="Snacks"
                                   @if(strpos($r->kategorie,"Snacks")!==false) checked @endif>
                            <label class="form-check-label" for="Snacks">Snacks</label></div>
                        <div class="form-check">
                            <input class="form-check-input" id="Vegetarisch" name="Vegetarisch" type="checkbox"
                                   value="Vegetarisch" @if(strpos($r->kategorie,"Vegetarisch")!==false) checked @endif>
                            <label class="form-check-label" for="Vegetarisch">Vegetarisch</label></div>
                        {{--https://stackoverflow.com/questions/16167675/return-the-value-of-a-js-function-and-use-it-as-the-value-for-an-input-button--}}
                        <input type="hidden" id="kategorie" name="kategorie" value="">
                    </div>
                    <div class="form-group">
                        <label for="zeit">Bitte gebe die ungefähre Gesamtzeit in Minuten an, wie lange dein Gericht
                            benötigt?</label>
                        <p class="untertitel">(inkl. Zubereitungszeit und Koch-, Back- bzw. Grillzeit)</p>
                        <input class="form-control-range" id="zeit" name="zeit" list="zeiten" type="range" min="15"
                               max="240"
                               step="15"
                               onchange="updateZeitOutput(this.value);" required value="{{$r->zeit}}">
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
                        <output id="zeit_output" for="zeit" type="text">{{$r->zeit}}</output>
                        <span> min</span>
                    </div>
                    <br>
                    <div class="row justify-content-end">
                        <div>
                            <input type="reset" class="abortbtn btn" value="Abbrechen">
                            <input type="submit" class="finishbtn btn" value="Änderungen speichern">
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
    <script>
        function updateZeitOutput(val) {
            $('#zeit_output').val(val);
        }

        function kategory() {
            var txt = "";
            if ($('#Pasta').prop('checked') == true) {
                txt = txt + " Pasta";
            }
            if ($('#Fisch').prop('checked') == true) {
                txt = txt + " Fisch";
            }
            if ($('#Fleisch').prop('checked') == true) {
                txt = txt + " Fleisch";
            }
            if ($('#Snacks').prop('checked') == true) {
                txt = txt + " Snacks";
            }
            if ($('#Vegetarisch').prop('checked') == true) {
                txt = txt + " Vegetarisch";
            }
            $('#kategorie').val(txt);
        }

        function startUpdateKategory() {
            var txt = "{{$r->kategorie}}";
            if (txt.includes('Pasta')) {
                $('#Pasta').prop('checked', checked);
            }
            if (txt.includes('Fisch')) {
                $('#Fisch').prop('checked', checked);
            }
            if (txt.includes('Fleisch')) {
                $('#Fleisch').prop('checked', checked);
            }
            if (txt.includes('Snacks')) {
                $('#Snacks').prop('checked', checked);
            }
            if (txt.includes('Vegetarisch')) {
                $('#Vegetarisch').prop('checked', checked);
            }

        }

    </script>
    <!-- Quelle https://www.w3schools.com/html/tryit.asp?filename=tryhtml_form_submit-->
@endsection