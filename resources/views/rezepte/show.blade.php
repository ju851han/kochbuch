@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-12 col-md-8 offset-md-2">
                <h2>Rezept: {{  $rezept->rName }} </h2>
                <p id="kategorie_zeit_kosten">Kategorien: {{  $rezept->kategorie }} | <i class="far fa-clock"></i> Zeit
                    : {{  $rezept->zeit }} min | <i class='fas fa-piggy-bank'></i> Kosten: {{$rezept->kostenjePortion}}
                    €</p>
                <!-- https://mdbootstrap.com/docs/jquery/forms/search/ -->
                <label for="portion">Portion(en):</label>
                <input id="portion" name="portion" type="number" step="0.5" min="0" max="50" value="1"
                       onchange="updateKosten(this.value);updateMenge(this.value);">

                <h3>Zutaten</h3>
                <table class="table">
                    <tr>
                        <th>Menge</th>
                        <th>Zutat</th>
                    </tr>
                    {{--https://stackoverflow.com/questions/26566675/getting-the-value-of-an-extra-pivot-table-column-laravel--}}
                    @foreach($rezept->zutats  as $zutat )
                        <tr>
                            <td> {{$rezept->zutats()->where('zutat_zName',$zutat->zName)->first()->pivot->menge}} {{$zutat->mengeneinheit}}</td>{{--Menge * Portion--}}
                            <td>{{ $zutat->zName }}</td>
                        </tr>
                    @endforeach

                </table>

                <h3>Zubereitung</h3>
                <p>{{$rezept->zubereitung}}</p>
                <button class="normalbtn btn" onclick="window.location.href='/rezepte/{{$rezept->rID}}/edit'"
                        title="Rezept bearbeiten"><i class="material-icons btn_i">edit</i> Rezept bearbeiten
                </button>
                <button class="abortbtn btn" onclick="window.location.href='/rezepte/{{$rezept->rID}}/destroy'"
                        title="Rezept löschen"><i class="fas fa-trash-alt btn_i"></i> Löschen
                </button>
            </section>
        </div>
    </div>
    <script>
        function updateKosten(val) {/*TODO*/
            var kosten = "{{ $rezept->kostenjePortion}}" * val;
            $('#kategorie_zeit_kosten').replaceWith(" <p id=\"kategorie_zeit_kosten\">Kategorien: {{  $rezept->kategorie }} | <i class=\"far fa-clock\"></i> Zeit : {{  $rezept->zeit }} min | <i class='fas fa-piggy-bank'></i> Kosten: " + kosten + " €</p>\n");
        }

        function updateMenge(val) {

        }

    </script>
@endsection