@extends('layouts.app')
{{--TODO Validate:  zutaten die bereits schon geaddetet wurde, darf nicht nochmal geaddet werden--}}
@section('content')
    <div class="container">
        <div class="row">
            <section class="col-12 col-md-8 offset-md-2">
                <h2>Rezept bearbeiten</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">1. Zutaten bearbeiten</li>
                    </ol>
                </nav>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="get" action="/rezepte/{{$r->rID}}/edit_step2">
                    @csrf
                    <?php
                    $i=1;
                    foreach ($r->zutats as $z) {
                        echo "<div class='form-row'>";
                        echo "<input type='hidden' name='anz_rows' value='" . $i . "' id='anz_rows'>";
                        echo "<div class='form-group col-5'>";
                        echo "<label for='menge'>Menge</label>";
                        echo "<div class='form-row'>";
                        echo "<input id='menge_" . $i . "' class='form-control col-11' name='menge_" . $i . "' type='number' min='0.5' max='1000000' step='0.5' onchange='calc_kosten(" . $i . ")' value='".$r->zutats()->where('zutat_zName',$z->zName)->first()->pivot->menge."' required>";
                        echo "<output id='mengeneinheit_" . $i . "' class='mengeneinheit col-1' name='mengeneinheit_" . $i . "'>".$z->mengeneinheit."";
                        echo "</output>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='form-group col-6 offset-1'>";
                        echo "<label for='zName'>Zutat</label>";
                        echo "<select name='zName_" . $i . "' id='zName_" . $i . "' class='form-control' onchange='updateMengeneinheit(this.value," . $i . ");'>";
                        foreach ($zutaten as $zutat) {
                            if ($zutat->zName == $z->zName) {
                                echo "<option value='".$zutat->zName."' selected>".$zutat->zName."</option>";
                            } else {
                                echo "<option value='".$zutat->zName."'>".$zutat->zName."</option>";
                            }
                        }
                        echo "</select>";
                        echo "</div>";
                        echo "</div>";
                        $i++;
                    }
                    ?>
                    <input class="form-control" type="hidden" id="kostenjePortion" name="kostenjePortion" value="{{$r->kostenjePortion}}">
                    <br>
                    <div class="row justify-content-end">
                        <div>
                            <input type="reset" class="abortbtn btn" onclick="window.location.href='/rezepte/index'"
                                   value="Abbrechen">
                            <input type="submit" class="normalbtn btn" value="Weiter">
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
    <script>
        function updateMengeneinheit(val, anz_rows) {
            @foreach ($zutaten as $z)
            if (val === "{{$z->zName}}") {
                $('#mengeneinheit_' + anz_rows).val("{{$z->mengeneinheit}}");
                $('#mengeneinheit' + anz_rows).text("{{$z->mengeneinheit}}");
            }
            @endforeach
        }

        function calc_kosten(anz_rows) {
            var kostenJePortion = 0;
            while (anz_rows > 0) {
                @foreach ($zutaten as $z)
                if ($('#zName_' + anz_rows).val() === "{{$z->zName}}") {
                    var kostenJeEinheit = "{{$z->kostenjeEinheit}}";
                    kostenJePortion = kostenJePortion + (kostenJeEinheit * $('#menge_' + anz_rows).val());
                    $('#kostenjePortion').val(kostenJePortion);
                }
                @endforeach
                    anz_rows--;
            }
        }


    </script>
@endsection