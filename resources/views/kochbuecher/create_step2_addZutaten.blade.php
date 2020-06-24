@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-xs-auto col-md-8 offset-md-2">
                <h2>Kochbuch erstellen</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">1. Name des Kochbuches eingeben</li>
                        <li class="breadcrumb-item active" aria-current="page">2. Zutaten eingeben</li>
                    </ol>
                </nav>
                </nav>
                <form method="post" action="/kochbuecher/create_step3_addRezept">
                    @csrf
                    <div class="form-group">
                        <label for="zName">Zutat</label>
                        <input class="form-control" id="zName" name="zName" type="text" minlength="2" maxlength="256"
                               required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="menge">Menge</label>
                        <input id="menge" class="form-control" name="menge" type="number" min="0.5" max="1000000"
                               step="0.5" required>
                    </div>
                    <div class="form-group">
                        <label for="mengeneinheit">Mengeneinheit</label>
                        <input class="form-control" id="mengeneinheit" name="mengeneinheit" type="text" minlength="1"
                               maxlength="125" required>
                    </div>
                    <br>
                    <div class="form-group">
               <label for="kostenJeEinheit">Kosten je Einheit</label><div class="form-row">
                            <input class="form-control col-md-10 order-1" id="kostenJeEinheit" name="kostenJeEinheit"
                                   type="number" min="0" step="0.01" required>
                            <label class="col-md-2 order-2">  €</label>
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
                            <option value="Tiefkühl"></option>
                        </datalist>
                    </div>
                    <br>
                    <input type="reset" class="abortbtn btn" value="Abbrechen">
                    <input type="submit" class="normalbtn btn" value="Weiter">
                </form>
            </section>
        </div>
    </div>
    <!-- Quelle https://www.w3schools.com/html/tryit.asp?filename=tryhtml_form_submit-->
@endsection