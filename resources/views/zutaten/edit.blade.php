@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-12 col-md-8 offset-md-2">
                <h2>Bearbeiten der Zutat</h2>
                <p>In dieser Ansicht kannst du die Zutaten bearbeiten.</p>

                <form method="post" action="/zutaten/{{$z->zName}}/update">
                    @csrf
                    <div class="form-group">
                        <label for="zName">Zutat</label>
                        <input class="form-control" id="zName" name="zName" type="text" minlength="2" maxlength="256"
                               required
                               value="{{$z->zName}}"><br>
                    </div>
                    <div class="form-group">
                        <label for="mengeneinheit">Mengeneinheit</label>
                        <input class="form-control" id="mengeneinheit" name="mengeneinheit" type="text" minlength="1"
                               maxlength="125" required
                               value="{{$z->mengeneinheit}}">
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="row">
                            <label for="kostenJeEinheit">Kosten je Einheit</label>
                        </div>
                        <div class="row">
                            <input class="form-control col-10 col-md-7" id="kostenJeEinheit" name="kostenJeEinheit"
                                   type="number"
                                   min="0"
                                   step="0.01" placeholder="{{$z->kostenJeEinheit}}" value="{{$z->kostenJeEinheit}}"
                                   required>
                            <label class="col-2 col-md-1">€</label>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="produktgruppe">Produktgruppe</label>
                        <input list="produktgruppen" class="form-control" id="produktgruppe" name="produktgruppe"
                               type="text" value="{{$z->produktgruppe}}">
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
                    <input type="reset" class="abortbtn btn" value="Abbrechen">
                    <input type="submit" class="normalbtn btn" value="Änderungen speichern">
                </form>
            </section>
        </div>
    </div>
@endsection