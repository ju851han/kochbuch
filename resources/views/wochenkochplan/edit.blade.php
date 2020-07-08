@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-12 col-md-8 offset-md-2">
                <h2>Wochenkochplan <i class="fas fa-calendar-week"></i></h2>
                <table class="table">
                    <thead class="thead_orangered">
                    <tr>
                        <th>Wochentag</th>
                        <th>geplantes Rezept</th>
                        <th>Kosten je Portion</th>
                        <th>Portion</th>
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
                                <param id="kosten_{{$wochenkochplan[$i]->id}}" name="kosten_{{$wochenkochplan[$i]->id}}"
                                       value="{{$rezepte[$i]->kostenjePortion}}">
                                <td class="text-center">
                                    {{ number_format($rezepte[$i]->kostenjePortion, 2,",", "." )}} €
                                </td>
                                <td>
                                     {{$wochenkochplan[$i]->portion}}
                                </td>
                            @endif

                        </tr>
                    @endfor
                    </tbody>
                </table>
                <p id="gesamtkosten" class="beschreibung"></p>
                <button class="normalbtn btn" onclick="window.location.href='/einkaufsliste'">Einkaufsliste erstellen</button>
                <button class="normalbtn btn" onclick="window.location.href='/wochenkochplan/destroy'">Entleeren</button>
            </section>
        </div>
    </div>
    <script>
        function updateGesamtkosten() {
            var sum = 0;
            @foreach($wochenkochplan as $w)
            if ($('#btn_{{$w->id}}').length === 0) {
                sum = sum + ($('#kosten_{{$w->id}}').val() * $('#portion_{{$w->id}}').val());
            }
            @endforeach
            $('#gesamtkosten').replaceWith("<p id=\"gesamtkosten\"  class=\"beschreibung\">Gesamtkosten betragen: €" + (Math.round(sum * 100) / 100).toFixed(2) + "</p>");
        }

    </script>
@endsection