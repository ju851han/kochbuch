@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-12 col-md-8 offset-md-2">
                <h2>Rezept: {{  $rezept->rName }} </h2>
                <p class="beschreibung" id="kategorie_zeit_kosten">Kategorien: {{  $rezept->kategorie }} | <i
                            class="far fa-clock"></i> Zeit
                    : {{  $rezept->zeit }} min | <i class='fas fa-piggy-bank'></i> Kosten: {{$rezept->kostenjePortion}}
                    €</p>
                <br><br>
                <div class="form-group">
                    <div class="form-row">
                        <p class="col-4 col-md-2 offset-md-3 ">Portion(en):</p>
                        <input id="portion" name="portion" class="form-control col-3 col-md-2" type="number"
                               step="0.5"
                               min="0" max="50" value="1"
                               onchange="updateKosten(this.value);updateMenge(this.value);">
                    </div>
                </div>
                <h3 class="offset-2 offset-md-3">Zutaten</h3>
                <table class="table col-8 col-md-6 align-self-center">
                    <thead>
                    <tr>
                        <th>Menge</th>
                        <th>Zutat</th>
                    </tr>
                    </thead>
                    <tbody id="zutaten" class="background2ndTR">
                    {{--https://stackoverflow.com/questions/26566675/getting-the-value-of-an-extra-pivot-table-column-laravel--}}
                    @foreach($rezept->zutats  as $zutat )
                        <tr>
                            <td>{{$rezept->zutats()->where('zutat_zName',$zutat->zName)->first()->pivot->menge}} {{$zutat->mengeneinheit}}</td>
                            <td>{{ $zutat->zName }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <br>
                <h3>Zubereitung</h3>
                <p class="beschreibung">{{$rezept->zubereitung}}</p>
                <br>
                <button class="normalbtn btn" onclick="window.location.href='/rezepte/{{$rezept->rID}}/edit_step1'"
                        title="Rezept bearbeiten"><i class="material-icons btn_i">edit</i> Rezept bearbeiten
                </button>
                @if (Auth::user()->hasRole('admin'))
                    <button class="abortbtn btn" onclick="window.location.href='/rezepte/{{$rezept->rID}}/destroy'"
                            title="Rezept löschen"><i class="fas fa-trash-alt btn_i"></i> Rezept löschen
                    </button>
                @endif
            </section>
        </div>
    </div>
    <script>
        function updateKosten(val) {
            var kosten = "{{ $rezept->kostenjePortion}}" * val;
            $('#kategorie_zeit_kosten').replaceWith(" <p class=\"beschreibung\" id=\"kategorie_zeit_kosten\">Kategorien: {{  $rezept->kategorie }} | <i class=\"far fa-clock\"></i> Zeit : {{  $rezept->zeit }} min | <i class='fas fa-piggy-bank'></i> Kosten: " + kosten + " €</p>\n");
        }

        function updateMenge(val) {
            $('#zutaten').replaceWith("<tbody id=\"zutaten\">\n" +
                "                    {{--https://stackoverflow.com/questions/26566675/getting-the-value-of-an-extra-pivot-table-column-laravel--}}\n" +
                "                    @foreach($rezept->zutats  as $zutat )\n" +
                "                        <tr>\n" +
                "                            <td>" + {{$rezept->zutats()->where('zutat_zName',$zutat->zName)->first()->pivot->menge}}* val + " {{$zutat->mengeneinheit}}</td>{{--Menge * Portion--}}\n" +
                "                            <td>{{ $zutat->zName }}</td>\n" +
                "                        </tr>\n" +
                "                    @endforeach\n" +
                "                    </tbody>");

        }

    </script>
@endsection