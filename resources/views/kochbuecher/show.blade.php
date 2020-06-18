@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-xs-auto col-md-8 offset-md-2">
                <h3><i class="fa fa-book"></i> Kochbuch:</h3>
                <h1 id="special">{{ $k->kName }}</h1>
                <p class="untertitel">erstellt am: {{$k->erstelltam}}; zuletzt aktualisert
                    am: {{$k->aktualisiertam}}</p>
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
                    <tr> {{--TODO insert Rezeptdata --}}
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    {{--@foreach ($rezepte as $r)
                        <tr>
                            <td> {{  $r->rName }} </td>
                            <td> {{  $r->kategorie }}</td>
                            <td> {{  $r->zeit }}</td>
                            <td> {{  $r->kostenjePortion }}</td>
                        </tr>
                    @endforeach--}}
                    </tbody>
                </table>
                <button class="normalbtn btn" onclick="window.location.href='/kochbuecher/{{$k->kID}}/edit'"
                        title="Kochbuch bearbeiten"><i class="material-icons btn_i">edit</i> Bearbeiten
                </button>
                <button class="normalbtn btn" onclick="window.location.href='/kochbuecher/{{$k->kID}}/destroy'"
                        title="Kochbuch löschen"><i class="fas fa-trash-alt btn_i"></i> Löschen
                </button>
            </section>
        </div>
    </div>
@endsection