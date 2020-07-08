@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-12 col-md-8 offset-md-2">
                <h2>Wochenkochplan <i class="fas fa-calendar-week"></i></h2>
                <form method="post" action="/wochenkochplan/update">
                <table class="table">
                    <thead class="thead_orangered">
                    <tr>
                        <th>Wochentag</th>
                        <th>geplantes Rezept</th>
                        <th>Kosten je Portion</th>
                        <th>Portion</th> {{--TODO Portion eingeben ->  Kosten berechnen lassen --}}
                    </tr>
                    </thead>
                    <tbody class="background2ndTR" onchange="updateGesamtkosten();">
                    @for ($i = 0; $i < count($wochenkochplan); $i++)
                        <tr>

                            <td>{{$wochenkochplan[$i]->wochentag}}</td>
                            @if (is_null($rezepte[$i]))
                                <td colspan="3">
                                    <button class="normalbtn btn" id="btn_{{$wochenkochplan[$i]->id}}"
                                            onclick="window.location.href='/wochenkochplan/{{$wochenkochplan[$i]->id}}/addRezept'">
                                        <i class="material-icons btn_i">add_circle</i> Rezept hinzufügen
                                    </button>
                                </td>
                            @else
                                <td>
                                    {{$rezepte[$i]->rName}}
                                </td>
                                <param id="kosten_{{$wochenkochplan[$i]->id}}" name="kosten_{{$wochenkochplan[$i]->id}}" value="{{$rezepte[$i]->kostenjePortion}}">
                                <td  class="text-center">
                                    {{ number_format($rezepte[$i]->kostenjePortion, 2,",", "." )}} €
                                        </td>
                                <td>
                                    <label type="hidden" for="portion_{{$wochenkochplan[$i]->id}}"></label>
                                    <input id="portion_{{$wochenkochplan[$i]->id}}" name="portion_{{$wochenkochplan[$i]->id}}" type="number" min="1.0" step="0.5" max="100"
                                           value="{{$wochenkochplan[$i]->portion}}">
                                </td>
                            @endif

                        </tr>
                    @endfor

                    </tbody>
                </table>
                <p id="gesamtkosten">Gesamtkosten betragen:</p>
                <button class="normalbtn btn">Einkaufsliste erstellen</button>
                <button type="reset" class="normalbtn btn" value="Entleeren" onclick="window.location.href='/wochenkochplan/destroy'">Entleeren</button>
                <button type="submit" class="normalbtn btn" onclick="window.location.href='/wochenkochplan/update'"
                        value="Speichern">Speichern
                </button>
                </form>
            </section>
        </div>
    </div>
    <script>
        function updateGesamtkosten() {
            var sum=0;
           @foreach($wochenkochplan as $w)
                if($('#btn_{{$w->id}}').length===0){
                    sum = sum + ($('#kosten_{{$w->id}}').val() * $('#portion_{{$w->id}}').val());

                }
         @endforeach
            $('#gesamtkosten').replaceWith("<p id=\"gesamtkosten\">Gesamtkosten betragen: €"+(Math.round(sum * 100) / 100).toFixed(2)+"</p>");
        }
    </script>
@endsection