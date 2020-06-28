@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-12 col-md-8 offset-md-2">
                <h2>Zutat: {{  $z->zName }}</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Produktgruppe</th>
                        <th>Kosten je Einheit</th>
                        <th>Mengeneinheit</th>
                    </tr>
                    </thead>
                    <tbody class="background2ndTR">
                    <tr>
                        <td> {{  $z->produktgruppe }}</td>
                        <td> {{  $z->kostenjeEinheit }} €</td>
                        <td> {{  $z->mengeneinheit }}</td>
                    </tr>
                    </tbody>
                </table>
                <button class="normalbtn btn" onclick="window.location.href='/zutaten/{{$z->zName}}/edit'"
                        title="Zutat bearbeiten"><i class="material-icons btn_i">edit</i> Zutat bearbeiten
                </button>
                @if (Auth::user()->hasRole('admin'))
                    <button class="abortbtn btn" onclick="window.location.href='/zutaten/{{$z->zName}}/destroy'"
                            title="Zutat löschen"><i class="fas fa-trash-alt btn_i"></i> Zutat löschen
                    </button>
                @endif
            </section>
        </div>
    </div>
@endsection
