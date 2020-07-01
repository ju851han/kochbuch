@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-xs-auto col-md-8 offset-md-2">
                <h2>Wochenkochplan <i class="fas fa-calendar-week"></i></h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Wochentag</th>
                        <th>geplantes Rezept</th>
                        <th>Zeit</th>
                         <th>Kosten</th>
                         <th>Portion</th> {{--TODO Portion eingeben ->  Kosten berechnen lassen --}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $wochentag as $w)
                        <tr>
                            <td>{{$w->wochentag}}</td>
                            @if (is_null($w->rezepts()->where('wochenkochplan_id',$w->id)->first()))
                                <td colspan="4">
                                    <?php echo"hi"?>
                                    <button>Rezept hinzufügen</button>
                                </td>
                            @else
                                <td>
                                    {{$w->rezepts()->where('wochenkochplan_id',$w->id)->first()->rName}}
                                </td>
                                <td>
                                    {{$w->rezepts()->where('wochenkochplan_id',$w->id)->first()->zeit}} min
                                </td>
                                <td>
                                    {{$w->rezepts()->where('wochenkochplan_id',$w->id)->first()->kostenjePortion}} €
                                </td>
                                <td>

                                </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <br>
                <button class="normalbtn btn">Einkaufsliste erstellen</button>
                <br>
                <br>
                <button type="reset" class="normalbtn btn" value="Entleeren">Entleeren</button> <!-- reset = Formulardaten werden gelöscht-->
                <button type="submit" class="normalbtn btn" value="Speichern">Speichern</button>
            </section>
        </div>
    </div>
@endsection