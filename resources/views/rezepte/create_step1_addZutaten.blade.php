@extends('layouts.app')
{{--TODO Validate:  zutaten die bereits schon geaddetet wurde, darf nicht nochmal geaddet werden--}}
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
                <form method="post" action="/rezepte/create_step2">
                    @csrf
                    <div id="extendable_area">
                        <div class="form-row">
                            <input type="hidden" name="anz_rows" value="1" id="anz_rows">
                            <div class="form-group col-md-5 offset-1">
                                <label for="menge">Menge</label>
                                <div class="form-row">
                                    <input id="menge_1" class="form-control col-md-5" name="menge_1" type="number"
                                           min="0.5" max="1000000" step="0.5" onchange="calc_kosten(1)" required>
                                    <output id="mengeneinheit_1" class="mengeneinheit col-md-1" name="mengeneinheit_1">g
                                    </output>
                                </div>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="zName">Zutat</label>
                                <select name="zName_1" id="zName_1" class="form-control"
                                        onchange="updateMengeneinheit(this.value,1);">
                                    @foreach ($zutaten as $z)
                                        <option value="{{$z->zName}}">{{$z->zName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <button id="addBtn" class="normalbtn btn" onclick="addZutat();"><i
                                    class="material-icons btn_i">add_circle</i>Zutat hinzufügen
                        </button>
                    </div>
                    <input class="form-control" type="hidden" id="kostenjePortion" name="kostenjePortion" >
                    <br>
                    <input type="reset" class="abortbtn btn" onclick="window.location.href='/rezepte/index'" value="Abbrechen">
                    <input type="submit" class="normalbtn btn" value="Weiter">
                </form>
            </section>
        </div>
    </div>
    <script>
        function updateMengeneinheit(val,anz_rows) {
            @foreach ($zutaten as $z)
            if (val === "{{$z->zName}}") {
                $('#mengeneinheit_'+anz_rows).val("{{$z->mengeneinheit}}");
                $('#mengeneinheit'+anz_rows).text("{{$z->mengeneinheit}}");
            }
            @endforeach
        }

        function addZutat() {
            var anz_rows = parseInt($('#anz_rows').val());
            anz_rows++;
            $('#anz_rows').val(anz_rows);
            $('#addBtn').remove();
            $('#extendable_area').append("<div class=\"form-row\">\n" +
                "                            <input type=\"hidden\" name=\"anz_rows\" value=\"1\" id=\"anz_rows\">\n" +
                "                            <div class=\"form-group col-md-5 offset-1\">\n" +
                "                                <label for=\"menge\">Menge</label>\n" +
                "                                <div class=\"form-row\">\n" +
                "                                    <input id=\"menge_"+anz_rows+"\" class=\"form-control col-md-5\" name=\"menge_"+anz_rows+"\" type=\"number\"\n" +
                "                                           min=\"0.5\" max=\"1000000\" step=\"0.5\" onchange=\"calc_kosten("+anz_rows+")\" required>\n" +
                "                                    <output id=\"mengeneinheit_"+anz_rows+"\" class=\"mengeneinheit col-md-1\" name=\"mengeneinheit"+anz_rows+"\">g\n" +
                "                                    </output>\n" +
                "                                </div>\n" +
                "                            </div>\n" +
                "                            <div class=\"form-group col-md-5\">\n" +
                "                                <label for=\"zName\">Zutat</label>\n" +
                "                                <select name=\"zName_"+anz_rows+"\" id=\"zName_"+anz_rows+"\" class=\"form-control\"\n" +
                "                                        onchange=\"updateMengeneinheit(this.value,"+anz_rows+");\">\n" +
                "                                    @foreach ($zutaten as $z)\n" +
                "                                        <option value=\"{{$z->zName}}\">{{$z->zName}}</option>\n" +
                "                                    @endforeach\n" +
                "                                </select>\n" +
                "                            </div>\n" +
                "                        </div>\n" +
                "                        <br>\n" +
                "                        <button id=\"addBtn\" class=\"normalbtn btn\" onclick=\"addZutat();\"><i\n" +
                "                                    class=\"material-icons btn_i\">add_circle</i>Zutat hinzufügen\n" +
                "                        </button>");

        }

        function calc_kosten(anz_rows) {
            var kostenJePortion=0;
            while(anz_rows>0){
                @foreach ($zutaten as $z)
                if ($('#zName_'+anz_rows).val() === "{{$z->zName}}") {
                    var kostenJeEinheit="{{$z->kostenjeEinheit}}";
                    kostenJePortion= kostenJePortion+ (kostenJeEinheit*$('#menge_'+anz_rows).val());
                    $('#kostenjePortion').val(kostenJePortion);
            }
            @endforeach
            anz_rows--;
            }
        }


    </script>
@endsection