@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-xs-auto col-md-8 offset-md-2">
                <h2>Rezept erstellen</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">1. Zutaten eingeben</li>
                        <li class="breadcrumb-item active" aria-current="page">2. Rezeptdaten hinzufügen</li>
                        <li class="breadcrumb-item active" aria-current="page">3. Übersicht</li>
                    </ol>
                </nav>
                <h3>Neues Rezept: {{$rezept->rName}}</h3>
                <p>Kategorien: {{  $rezept->kategorie }} | <i class="far fa-clock"></i> Zeit : {{  $rezept->zeit }} min
                </p>
                <!-- https://mdbootstrap.com/docs/jquery/forms/search/ -->
                <!--TODO portion =1  rezept kosten-->
                <h4>Zutaten</h4>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Menge</th>
                        <th>Zutat</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><!--TODO Menge--></td>
                        <td>{{ $zutat->zName }}</td>
                    </tr>
                    </tbody>
                </table>

                <h4>Zubereitungsbeschreibung</h4>
                <p>{{$rezept->zubereitung}}</p>
            </section>
            <div>
                <button onclick="window.location.href='/rezepte/store'" class="btn finishbtn">Speichern</button>
                <button onclick="window.location.href='#'" class="btn abortbtn">Abbrechen</button> <!--TODO-->
            </div>
        </div>
    </div>
@endsection