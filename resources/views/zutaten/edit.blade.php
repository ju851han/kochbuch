@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Bearbeiten der Zutat</h2>
        <p>Text für Erklärung</p>

        <form method="post" action="/zutaten/{{$z->zName}}/update">
            @csrf
            <label for="zName">Zutat</label>
            <input class="form-control" id="zName" name="zName" type="text" minlength="2" maxlength="256" required value="{{$z->zName}}"><br>
            <!--TODO <label for="Menge">Menge</label>
            <input id="Menge" name="Menge" type="number" min="0.5" max="1000000" required></br></br>-->
            <label for="mengeneinheit">Mengeneinheit</label>
            <input class="form-control" id="mengeneinheit" name="mengeneinheit" type="text" minlength="1" maxlength="125" required
                   value="{{$z->mengeneinheit}}">
            <br>
            <label for="kostenJeEinheit">Kosten je Einheit</label>
            <input class="form-control" id="kostenJeEinheit" name="kostenJeEinheit" type="text" minlength="1" maxlength="125" steps="0.01"
                   required value="{{$z->kostenJeEinheit}}">
            <br>
            <label for="produktgruppe">Produktgruppe</label>
            <input class="form-control" id="produktgruppe" name="produktgruppe" type="Text" minlength="2" required
                   value="{{$z->produktgruppe}}">
            <!--<input list="produktgruppen" id="produktgruppe" name="produktgruppe" type="text">
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
            </datalist>-->
            <br>
            <input type="reset" value="Abbrechen">
            <input type="submit" value="Änderungen speichern">
        </form>
    </div>
@endsection