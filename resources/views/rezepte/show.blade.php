@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-xs-auto col-md-8 offset-md-2">
                <h2>Rezept: {{  $rezept->rName }} </h2>
                <p>Kategorien: {{  $rezept->kategorie }} | <i class="far fa-clock"></i> Zeit : {{  $rezept->zeit }} min
                </p>
                <!-- https://mdbootstrap.com/docs/jquery/forms/search/ -->
                <label for="portion">Portion(en):</label><input id="portion" name="portion" type="number" step="0.5"
                                                                min="0"
                                                                max="50" value="1">
                <?php
                echo "<p> Kosten: " . $rezept->kostenjePortion * 2 . " €" . "</p>"
                ?> {{--TODO Kosten *Portionen--}}

                <h3>Zutaten</h3>
                <table class="table">
                    <tr>
                        <th>Menge</th>
                        <th>Zutat</th>
                    </tr>
                    <tr>
                        @foreach($rezept->zutats  as $zutat )
                            <td></td>{{--Menge * Portion--}}
                            <td>{{ $zutat->zName }}</td>
                        @endforeach
                    </tr>
                </table>

                <h3>Zubereitung</h3>
                <p>{{$rezept->zubereitung}}</p>
                <button class="normalbtn btn" onclick="window.location.href='/rezepte/{{$rezept->rID}}/edit'"
                        title="Rezept bearbeiten"><i class="material-icons btn_i">edit</i> Rezept bearbeiten
                </button>
                <button class="abortbtn btn" onclick="window.location.href='/rezepte/{{$rezept->rID}}/destroy'"
                        title="Rezept löschen"><i class="fas fa-trash-alt btn_i"></i> Löschen</button>
            </section>
        </div>
    </div>
@endsection