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
                        <th>Kosten</th>
                        <th>Portion</th> {{--TODO Portion eingeben ->  Kosten berechnen lassen --}}
                    </tr>
                    </thead>
                    <tbody class="background2ndTR">
                    @for ($i = 0; $i < count($wochenkochplan); $i++)
                        <tr>

                            <td>{{$wochenkochplan[$i]->wochentag}}</td>
                            @if (is_null($rezepte[$i]))
                                <td colspan="3">
                                    <button class="normalbtn btn"
                                            onclick="window.location.href='/wochenkochplan/{{$wochenkochplan[$i]->id}}/addRezept'">
                                        <i class="material-icons btn_i">add_circle</i> Rezept hinzufügen
                                    </button>
                                </td>
                            @else
                                <td>
                                    {{$rezepte[$i]->rName}}
                                </td>
                                <td class="text-center">
                                    {{ number_format($rezepte[$i]->kostenjePortion, 2,",", "." )}} €
                                </td>
                                <td>
                                    <input type="number" min="1.0" step="0.5" max="100"
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
                <!-- reset = Formulardaten werden gelöscht-->
                <button type="submit" class="normalbtn btn" onclick="window.location.href='/wochenkochplan/update'"
                        value="Speichern">Speichern
                </button>
            </section>
        </div>
    </div>
@endsection