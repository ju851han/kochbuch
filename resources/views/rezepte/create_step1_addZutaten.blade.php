@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-12 col-md-8 offset-md-2">
                <h2>Rezept erstellen</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">1. Zutaten eingeben</li>
                    </ol>
                </nav>
                <form method="post" action="/rezepte/create_step2_Rezept">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="menge">Menge</label>
                            <input id="menge" class="form-control" name="menge" type="number" min="0.5" max="1000000"
                                   step="0.5" required>
                        </div>
                        <div class="form-group col-md-1">
                            <label></label>
                            <output id="mengeneinheit" name="mengeneinheit">Stk</output>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="zName">Zutat</label>
                            <select name="zName_1" id="zName_1" class="form-control"
                                    onchange="updateMengeneinheit(this.value);">
                                @foreach ($zutaten as $z)
                                    <option value="{{$z->zName}}">{{$z->zName}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <input class="form-control col-md-10 order-1" id="kostenJeEinheit" name="kostenJeEinheit"
                            required>
                    <br>
                    <input type="reset" class="abortbtn btn" value="Abbrechen">
                    <input type="submit" class="normalbtn btn" value="Weiter">
                </form>
            </section>
        </div>
    </div>
    <script>
        function updateMengeneinheit(val) {
            @foreach ($zutaten as $z)
            if (val ==="{{$z->zName}}") {
                $('#mengeneinheit').val("{{$z->mengeneinheit}}");
                $('#mengeneinheit').text("{{$z->mengeneinheit}}");
            }
            @endforeach
        }
    </script>
@endsection