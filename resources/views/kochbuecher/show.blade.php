@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-xs-auto col-md-8 offset-md-2">
                <h3><i class="fa fa-book"></i> Kochbuch:</h3>
                <h1 id="special">{{ $kochbuch->kName }}</h1>
                <p class="untertitel">erstellt am: {{$kochbuch->erstelltam}}; zuletzt aktualisert
                    am: {{$kochbuch->aktualisiertam}}</p>
                <h2>Inhaltsverzeichnis</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Rezept Name</th>
                        <th>Kategorien</th>
                        <th>Zeit</th>
                        <th>Kosten</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class="background2ndTR">
                    <tr>
                        @foreach($kochbuch->rezepts  as $rezept )
                        <td>{{ $rezept->rName}}</td>
                        <td>{{  $rezept->kategorie }}</td>
                        <td>{{  $rezept->zeit }} min</td>
                        <td>{{  $rezept->kostenjePortion }} €</td>
                            <td><button class="normalbtn btn" onclick="window.location.href='/rezepte/{{$rezept->rID}}'"
                                        title="Rezept ansehen"><i class='fas fa-eye btn_i'></i></button></td>
                        @endforeach
                    </tr>
                    </tbody>
                </table>
                <button class="normalbtn btn" onclick="window.location.href='/kochbuecher/{{$kochbuch->kID}}/edit'"
                        title="Kochbuch bearbeiten"><i class="material-icons btn_i">edit</i> Bearbeiten
                </button>
                <button class="normalbtn btn" onclick="window.location.href='/kochbuecher/{{$kochbuch->kID}}/destroy'"
                        title="Kochbuch löschen"><i class="fas fa-trash-alt btn_i"></i> Löschen
                </button>
            </section>
        </div>
    </div>
@endsection