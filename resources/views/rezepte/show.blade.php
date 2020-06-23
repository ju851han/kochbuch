@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-xs-auto col-md-8 offset-md-2">
                <h2>Rezept: {{  $r->rName }} </h2>
                <p>Kategorien: {{  $r->kategorie }} | <i class="far fa-clock"></i> Zeit : {{  $r->zeit }} min</p>
                <!-- https://mdbootstrap.com/docs/jquery/forms/search/ -->
                <label for="portion">Portion(en):</label><input id="portion" name="portion" type="number" step="0.5"
                                                                min="0"
                                                                max="50" value="1">
                <?php
                echo "<p> Kosten: " . $r->kostenjePortion * 2 . " €" . "</p>"
                ?> {{--TODO Kosten *Portionen--}}


                {{--TODO Zutaten einfügen--}}
                <h3>Zutaten</h3>
                <table class="table">
                    <tr>
                        <th>Menge</th>
                        <th>Zutat</th>
                    </tr>
                    <tr>
                        <td></td>{{--Menge * Portion--}}
                        <td></td>
                    </tr>
                </table>

                <h3>Zubereitung</h3>
                <p>{{$r->zubereitung}}</p>
                <button class="normalbtn btn" onclick="window.location.href='/rezepte/{{$r->rID}}/edit'"
                        title="Rezept bearbeiten"><i class="material-icons btn_i">edit</i> Rezept bearbeiten
                </button>
            </section>
        </div>
    </div>
@endsection