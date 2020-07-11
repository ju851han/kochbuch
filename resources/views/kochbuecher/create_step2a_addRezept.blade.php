@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-12 col-md-8 offset-md-2">
                <h2>Kochbuch erstellen</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">1. Name des Kochbuches eingeben</li>
                        <li class="breadcrumb-item active" aria-current="page">2. Rezepte auswählen</li>
                    </ol>
                </nav>
                <form method="post" action="/kochbuecher/create_step3">
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
                                    <input id="rID_{{$r->rID}}" name="rID" type="checkbox" value="{{$r->rID}}"></td>
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
    <script>
       function sendCheckedBoxes(){
       var rIDs="";
           @foreach ($rezepte as $r)
           if($('#rID_'+'{{$r->rID}}').prop('checked') === true) {
               rIDs=rIDs+"{{$r->rID}},";
           }
           @endforeach
           $('#rIDs').val( rIDs.substr(0,rIDs.length-1));
        }
    </script>
@endsection