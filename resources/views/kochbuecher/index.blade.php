@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-xs-auto col-md-8 offset-md-2">
                <h2><i class="fa fa-book"></i> Kochbücher</h2>
                <br>
                <table class="table tbl_kochbuecher"> <!-- TODO Formatting -->
                    <thead class="thead_orangered">
                    <tr>
                        <th>Nr.</th>
                        <th>Name</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class="background2ndTR">
                    @foreach ($kochbuecher as $k)
                        <tr>
                            <td> {{  $k->kID }} </td> {{--TODO i instead of kID -> Sonst sind lücken vorhanden --}}
                            <td> {{  $k->kName }}</td>
                            <td>
                                <button class="normalbtn" onclick="window.location.href='/kochbuecher/{{$k->kID}}'"
                                        title="Kochbuch ansehen"><i class='fas fa-eye btn_i'></i></button>
                                <button class="normalbtn" onclick="window.location.href='/kochbuecher/{{$k->kID}}/edit'"
                                        title="Kochbuch bearbeiten"><i class="material-icons btn_i">edit</i></button>
                                <button class="normalbtn"
                                        onclick="window.location.href='/kochbuecher/{{$k->kID}}/destroy'"
                                        title="Kochbuch löschen"><i class="fas fa-trash-alt btn_i"></i></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <button class="normalbtn" onclick="window.location.href='/kochbuecher/create'"><i
                            class="material-icons btn_i">add_circle</i>
                    Neues Kochbuch erstellen
                </button>
            </section>
        </div>
    </div>
@endsection