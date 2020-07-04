@extends('layouts.app')
{{--TODO Validate:  zutaten die bereits schon geaddetet wurde, darf nicht nochmal geaddet werden--}}
@section('content')
    <div class="container">
        <div class="row">
            <section class="col-12 col-md-8 offset-md-2">
                <h2>Rezept erstellen</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">1. Zutaten eingeben</li>
                    </ol>
                </nav>
                <form method="post" action="/rezepte/edit_step2">
                    @csrf
                    @foreach($r->zutats as $z)
                        <div class="form-row">
                            <input type="hidden" name="anz_rows" value="1" id="anz_rows">
                            <div class="form-group col-5">
                                <label for="menge">Menge</label>
                                <div class="form-row">
                                    <input id="menge_1" class="form-control col-11" name="menge_1" type="number"
                                           min="0.5" max="1000000" step="0.5" onchange="calc_kosten(1)"
                                           value="{{$r->zutats()->where('zutat_zName',$z->zName)->first()->pivot->menge}}"
                                           required>
                                    <output id="mengeneinheit_1" class="mengeneinheit col-1" name="mengeneinheit_1">
                                    </output>
                                </div>
                            </div>
                            <div class="form-group col-6 offset-1">
                                <label for="zName">Zutat</label>
                                <select name="zName_1" id="zName_1" class="form-control"
                                        onchange="updateMengeneinheit(this.value,1);">
                                    @foreach ($zutaten as $zutat)
                                        {{--https://stackoverflow.com/questions/47996563/change-value-with-dropdown-in-laravel--}}
                                        <option value="{{$zutat->zName}}"
                                                @if($zutat->zName == $z->zName) selected @endif>{{$zutat->zName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    @endforeach
                    <input class="form-control" type="hidden" id="kostenjePortion" name="kostenjePortion">
                    <br>
                    <div class="row justify-content-end">
                        <div>
                            <input type="reset" class="abortbtn btn" onclick="window.location.href='/rezepte/index'"
                                   value="Abbrechen">
                            <input type="submit" class="normalbtn btn" value="Weiter">
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
    <script>
        function updateMengeneinheit(val, anz_rows) {
            @foreach ($zutaten as $z)
            if (val === "{{$z->zName}}") {
                $('#mengeneinheit_' + anz_rows).val("{{$z->mengeneinheit}}");
                $('#mengeneinheit' + anz_rows).text("{{$z->mengeneinheit}}");
            }
            @endforeach
        }

        function calc_kosten(anz_rows) {
            var kostenJePortion = 0;
            while (anz_rows > 0) {
                @foreach ($zutaten as $z)
                if ($('#zName_' + anz_rows).val() === "{{$z->zName}}") {
                    var kostenJeEinheit = "{{$z->kostenjeEinheit}}";
                    kostenJePortion = kostenJePortion + (kostenJeEinheit * $('#menge_' + anz_rows).val());
                    $('#kostenjePortion').val(kostenJePortion);
                }
                @endforeach
                    anz_rows--;
            }
        }


    </script>
@endsection