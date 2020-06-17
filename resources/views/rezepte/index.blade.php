@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-xs-auto col-md-8 offset-md-2">
                <h2>Rezepte Übersicht</h2>
                <table class="table">
                    <thead class="thead_orangered">
                    <tr>
                        <th>Rezept Name</th>
                        <th>Zeit</th>
                        <th>Kosten</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class="background2ndTR">
                    @foreach ($rezepte as $r)
                        <tr>
                            <td> {{  $r->rName }} </td>
                            <td> {{  $r->zeit }}</td> {{--TODO Zeit richtig angeben--}}
                            <td> {{  $r->kostenjePortion }} €</td>
                            <td>
                                <button class="normalbtn" onclick="window.location.href='/rezepte/{{$r->rID}}'"
                                        title="Rezept ansehen"><i class='fas fa-eye btn_i'></i></button>
                                <button class="normalbtn" onclick="window.location.href='/rezepte/{{$r->rID}}/edit'"
                                        title="Rezept bearbeiten"><i class="material-icons btn_i">edit</i></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </div>
@endsection