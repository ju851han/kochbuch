@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-xs-auto col-md-8 offset-md-2">
                <h2>Kochbuch erstellen</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">1. Name des Kochbuches eingeben</li>
                        <li class="breadcrumb-item active" aria-current="page">2. Zutaten eingeben</li>
                        <li class="breadcrumb-item active" aria-current="page">3. Rezepte hinzufügen</li>
                        <li class="breadcrumb-item active" aria-current="page">4. Übersicht</li>
                    </ol>
                </nav>
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
                    </tr>
                    </thead>
                    <tbody class="background2ndTR">
                    <tr>
                        <td>{{ $rezept->rName}}</td>
                        <td>{{  $rezept->kategorie }}</td>
                        <td>{{  $rezept->zeit }} min</td>
                        <td>{{  $rezept->kostenjePortion }}</td>
                    </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
    <!-- Quelle https://www.w3schools.com/html/tryit.asp?filename=tryhtml_form_submit-->
@endsection