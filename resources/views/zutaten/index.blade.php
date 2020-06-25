@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-12 col-md-8 offset-md-2">
                <h2>Zutaten</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Zutaten Name</th>
                        <th>Kosten je Einheit</th>
                        <th>Mengeneinheit</th>
                        <th>Produktgruppe</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class="background2ndTR">
                    @foreach ($zutaten as $z)
                        <tr>
                            <td> {{  $z->zName }} </td>
                            <td> {{  $z->kostenjeEinheit }} €</td>
                            <td> {{  $z->mengeneinheit }}</td>
                            <td> {{  $z->produktgruppe }}</td>
                            <td>
                                <button class="normalbtn btn" onclick="window.location.href='/zutaten/{{$z->zName}}'"
                                        title="Zutat ansehen"><i class='fas fa-eye btn_i'></i></button>
                                <button class="normalbtn btn"
                                        onclick="window.location.href='/zutaten/{{$z->zName}}/edit'"
                                        title="Zutat bearbeiten"><i class="material-icons btn_i">edit</i></button>
                                <button class="normalbtn btn"
                                        onclick="window.location.href='/zutaten/{{$z->zName}}/destroy'"
                                        title="Zutat löschen"><i class="fas fa-trash-alt btn_i"></i></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <button class="normalbtn btn" onclick="window.location.href='/zutaten/create'"><i
                            class="material-icons btn_i">add_circle</i>
                    Neue Zutat erstellen
                </button>
            </section>
        </div>
    </div>
@endsection