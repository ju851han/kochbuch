@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-12 col-md-8 offset-md-2">
                    <div class="input-group">
                        <input class="form-control" id="filter" name="filter" onkeyup="rezepte.filterAJAX();" placeholder="Suche Rezeptname"
                               type="text">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button">
                                <i class="fa fa-search"></i> {{--TODO Button formatting--}}
                                {{--https://codepen.io/gungorbudak/pen/ooKNpz--}}
                            </button>
                        </div>
                    </div>
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
                    <tbody class="background2ndTR">
                    @include('rezepte/index_tbody')

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