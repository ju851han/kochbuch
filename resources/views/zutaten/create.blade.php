@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-xs-auto col-md-8 offset-md-2">
                <h3>Zutaten hinzufügen</h3>
                <form method="POST" action="/zutaten">
                    @csrf
                    <div class="form-group">
                        <label for="zName">Zutat</label>
                        <input class="form-control" id="zName" name="zName" type="text" minlength="2" maxlength="256"
                               required>
                    </div>
                    <br>
                    <!-- TODO <label for="Menge">Menge</label>
                    <input id="Menge" name="Menge" type="number" min="0.5" max="1000000" required></br></br>-->
                    <div class="form-group">
                        <label for="mengeneinheit">Mengeneinheit</label>
                        <input class="form-control" id="mengeneinheit" name="mengeneinheit" type="text" minlength="1"
                               maxlength="125" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="kostenJeEinheit">Kosten je Einheit</label>
                        <div class="form-row">
                            <input class="form-control col-md-6" id="kostenJeEinheit" name="kostenJeEinheit" type="number"
                                   min="0"
                                   step="0.01" required>
                            <p class="form-group col-md-2"> €</p><!--TODO EUR Zeichen formattieren-->
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="produktgruppe">Produktgruppe</label>
                        <input class="form-control" list="produktgruppen" id="produktgruppe" name="produktgruppe"
                               type="text">
                        <datalist id="produktgruppen">
                            <option value="Backwaren"></option>
                            <option value="Fisch&Meeresfrüchte"></option>
                            <option value="Fleisch"></option>
                            <option value="Getränke"></option>
                            <option value="Grundnahrungsmittel"></option>
                            <option value="Konserven"></option>
                            <option value="Milchprodukte"></option>
                            <option value="Obst&Gemüse"></option>
                            <option value="Naschsachen&Knabbergebäck"></option>
                        </datalist>
                    </div>
                    <br>
                    <input type="reset"   class="abortbtn btn" value="Abbrechen">
                    <input type="submit" class="normalbtn btn" value="Zutat hinzufügen">
                </form>
                <!-- Quelle https://www.w3schools.com/html/tryit.asp?filename=tryhtml_form_submit-->
            </section>
        </div>
    </div>
@endsection