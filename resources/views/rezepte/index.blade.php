@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-12 col-md-8 offset-md-2">
                <form method="get" action="/rezepte/search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Suche Rezeptname">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button">
                                <i class="fa fa-search"></i> {{--TODO Button formatting--}}
                                {{--https://codepen.io/gungorbudak/pen/ooKNpz--}}
                            </button>
                        </div>
                    </div>
                </form>
                <hr>
                <h2>Rezepte</h2>
                <table class="table">
                    <thead class="thead_orangered">
                    <tr>
                        <th></th>
                        <th>Rezept Name</th>
                        <th>Zeit</th>
                        <th>Kosten</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class="background4thTR">
                    @foreach ($rezepte as $r)
                        <tr>
                            <td>
                                <button id="btn_{{$r->rID}}" class="btn-primary" data-toggle="collapse" data-target="#tr_{{$r->rID}}">+</button>
                            </td>
                            <td> {{  $r->rName }} </td>
                            <td> {{  $r->zeit }} min</td>
                            <td> {{  $r->kostenjePortion }} €</td>
                            <td>
                                <button id="collapse" class="normalbtn btn"
                                        onclick="window.location.href='/rezepte/{{$r->rID}}'"
                                        title="Rezept ansehen"><i class='fas fa-eye btn_i'></i></button>
                                @if (Auth::user()->hasRole('admin'))
                                    <button class="normalbtn btn"
                                            onclick="window.location.href='/rezepte/{{$r->rID}}/edit_step1'"
                                            title="Rezept bearbeiten"><i class="material-icons btn_i">edit</i></button>
                                    <button class="normalbtn btn"
                                            onclick="window.location.href='/rezepte/{{$r->rID}}/destroy'"
                                            title="Rezept löschen"><i class="fas fa-trash-alt btn_i"></i></button>
                                @endif
                            </td>
                        </tr>
                        <tr id="tr_{{$r->rID}}" class="collapse"><td colspan="5">Kategorie: {{$r->kategorie}} <br>
                                <table class=" col-8 col-md-6 align-self-center">
                                    <thead>
                                    <tr>
                                        <th>Menge</th>
                                        <th>Zutat</th>
                                    </tr>
                                    </thead>
                                    <tbody id="zutaten">
                                    @foreach($r->zutats  as $zutat )
                                        <tr>
                                            <td> {{$r->zutats()->where('zutat_zName',$zutat->zName)->first()->pivot->menge}} {{$zutat->mengeneinheit}}</td>
                                            <td>{{ $zutat->zName }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table></tr>
                    @endforeach
                    </tbody>
                </table>
                <button class="normalbtn btn" onclick="window.location.href='/rezepte/create'"><i
                            class="material-icons btn_i">add_circle</i>
                    Neues Rezept erstellen
                </button>
            </section>
        </div>
    </div>
@endsection