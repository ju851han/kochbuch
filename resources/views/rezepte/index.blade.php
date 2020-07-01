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
                    <tbody class="background2ndTR">
                    @foreach ($rezepte as $r)
                        <tr id="{{$r->rID}}">
                            <td>
                                <button id="btn_{{$r->rID}}" class="btn-primary" onclick="show({{$r->rID}});">+</button>
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
    <script>
        function show(rID) {
            @foreach($rezepte as $r)
            if (rID == "{{$r->rID}}") {
                $('#' + rID).last().after("<tr><td colspan=\"5\">Kategorie: {{$r->kategorie}} <br>\n" +
      " <table class=\" col-8 col-md-6 align-self-center\">\n" +
                    "                    <thead>\n" +
                    "                    <tr>\n" +
                    "                        <th>Menge</th>\n" +
                    "                        <th>Zutat</th>\n" +
                    "                    </tr>\n" +
                    "                    </thead>\n" +
                    "                    <tbody id=\"zutaten\">\n" +
                    "                    {{--https://stackoverflow.com/questions/26566675/getting-the-value-of-an-extra-pivot-table-column-laravel--}}\n" +
                    "                    @foreach($r->zutats  as $zutat )\n" +
                    "                        <tr>\n" +
                    "                            <td> {{$r->zutats()->where('zutat_zName',$zutat->zName)->first()->pivot->menge}} {{$zutat->mengeneinheit}}</td>\n" +
                    "                            <td>{{ $zutat->zName }}</td>\n" +
                    "                        </tr>\n" +
                    "                    @endforeach\n" +
                    "                    </tbody>\n" +
                    "                </table></tr>");
            }
            @endforeach

        }

    </script>
@endsection