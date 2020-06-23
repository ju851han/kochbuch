@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-xs-auto col-md-8 offset-md-2">
                <h2>Rezept erstellen</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">1. Zutaten eingeben</li>
                    </ol>
                </nav>
                <form method="post" action="/rezepte/create_step2_Rezept">
                    @csrf
                    <label for="zName">Zutat</label>
                    <input class="form-control" id="zName" name="zName" type="text" minlength="2" maxlength="256"
                           required>
                    <br>
                    <!-- TODO <label for="Menge">Menge</label>
                    <input id="Menge" name="Menge" type="number" min="0.5" max="1000000" required></br></br>-->
                    <label for="mengeneinheit">Mengeneinheit</label>
                    <input class="form-control" id="mengeneinheit" name="mengeneinheit" type="text" minlength="1"
                           maxlength="125" required>
                    <br>
                    <label for="kostenJeEinheit">Kosten je Einheit</label>
                    <input class="form-control" id="kostenJeEinheit" name="kostenJeEinheit" type="number" min="0"
                           step="0.01" required><span>€</span>
                    <br>
                    <label for="produktgruppe">Produktgruppe</label>
                    <input list="produktgruppen" id="produktgruppe" name="produktgruppe" type="text">
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
                        <option value="Tiefkühl"></option>
                    </datalist>
                    <br>
                    <input type="reset"   class="abortbtn btn" value="Abbrechen">
                    <input type="submit" class="normalbtn btn" value="Zutat hinzufügen">
                </form>
            </section>
        </div>
    </div>
    <!-- Quelle https://www.w3schools.com/html/tryit.asp?filename=tryhtml_form_submit-->
@endsection