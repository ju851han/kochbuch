@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-12 col-md-8 offset-md-2">
                <h2>Rezept zum Wochenkochplan hinzufügen</h2>
                <form method="post" action="/wochenkochplan/{{$wochenkochplan->id}}/updateRezept">
                    @csrf
                    <table class="table">
                        <thead class="thead_orangered">
                        <tr>
                            <th></th>
                            <th>Rezept Name</th>
                            <th>Zeit</th>
                            <th>Kosten</th>
                        </tr>
                        </thead>
                        <tbody class="background2ndTR" onchange="sendCheckedBoxes();">
                        @foreach ($rezepte as $r)
                            <tr>
                                <td><label for="rID_"{{$r->rID}} type="hidden"></label>
                                    <input id="rID_{{$r->rID}}" name="rID" type="radio" value="{{$r->rID}}"></td>
                                <td> {{  $r->rName }} </td>
                                <td> {{  $r->zeit }} min</td>
                                <td> {{  $r->kostenjePortion }} €</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div>
                        <input type="reset" class="abortbtn btn" onclick="window.location.href='/kochbuecher/index'"
                               value="Abbrechen">
                        <input type="submit" class="normalbtn btn" value="Weiter">
                    </div>
                    <input type="hidden" id="rIDs" name="rIDs" value="">
                </form>
            </section>
        </div>
    </div>
@endsection