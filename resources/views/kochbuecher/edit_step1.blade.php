@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-12 col-md-8 offset-md-2">
                <h3><i class="fa fa-book"></i> Zu bearbeitendes Kochbuch:</h3>
                <h1 id="special">{{ $kochbuch->kName }}</h1>
                <p class="untertitel">erstellt am: {{$kochbuch->created_at}}; zuletzt aktualisert
                    am: {{$kochbuch->updated_at}}</p>
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
                    @foreach($kochbuch->rezepts  as $rezept )
                        <tr>
                            <td>{{ $rezept->rName}}</td>
                            <td>{{  $rezept->kategorie }}</td>
                            <td>{{  $rezept->zeit }} min</td>
                            <td>{{  $rezept->kostenjePortion }} €</td>
                            <td>
                                <button class="normalbtn btn"
                                        onclick="window.location.href='/kochbuecher/{{$kochbuch->kID}}/rezept/{{$rezept->rID}}/delete'"
                                        title="Rezept löschen"><i class="fas fa-trash-alt btn_i"></i></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <button class="normalbtn btn"
                        onclick="window.location.href='/kochbuecher/{{$kochbuch->kID}}/edit_step2'"><i
                            class="material-icons btn_i">add_circle</i>Rezepte hinzufügen
                </button> {{--TODO href--}}
            </section>
        </div>
    </div>
    <!-- Quelle https://www.w3schools.com/html/tryit.asp?filename=tryhtml_form_submit-->
@endsection
