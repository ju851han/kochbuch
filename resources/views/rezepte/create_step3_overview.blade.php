@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-12 col-md-8 offset-md-2">
                <h2>Rezept erstellen</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">1. Zutaten eingeben</li>
                        <li class="breadcrumb-item active" aria-current="page">2. Rezeptdaten hinzufügen</li>
                        <li class="breadcrumb-item active" aria-current="page">3. Übersicht</li>
                    </ol>
                </nav>
                <h3>Neues Rezept: {{$rezept->rName}}</h3>
                <p class="beschreibung">Kategorien: {{ $rezept->kategorie }} | <i class="far fa-clock"></i> Zeit
                    : {{  $rezept->zeit }} min | <i class='fas fa-piggy-bank'></i>
                    Kosten: {{ $rezept->kostenjePortion }}
                </p><br>
                <h4 class="text-center">Zutaten</h4>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Menge</th>
                        <th>Zutat</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($zutaten as $zutat)
                        <tr>
                            <td>{{$zutat->menge}}{{$zutat->mengeneinheit}}</td>
                            <td>{{ $zutat->zName }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <br>
                <h4>Zubereitungsbeschreibung</h4>
                <p class="beschreibung">{{$rezept->zubereitung}}</p>
            </section>
            <div>
                <button onclick="window.location.href='/rezepte/store'" class="btn finishbtn">Speichern</button>
                <button onclick="window.location.href='#'" class="btn abortbtn">Abbrechen</button> <!--TODO-->
            </div>
        </div>
    </div>
@endsection