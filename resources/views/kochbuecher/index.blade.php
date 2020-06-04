@extends('layouts.app')

@section('content')
    <section>
        <h2><i class="fa fa-book"></i> Kochbücher</h2>
        <table class="table tbl_kochbuecher">
            <thead class="thead_orangered">
            <tr>
                <th>Kochbuch-Nr.</th>
                <th>Name</th>
                <th></th>
            </tr>
            </thead>
            <tbody class="background2ndTR">
            @foreach ($kochbuecher as $k)
                <tr>
                    <td> {{  $k->kID }} </td>
                    <td> {{  $k->kName }}</td>
                    <td> <button class="normalbtn" onclick="window.location.href='/kochbuecher/{{$k->kID}}/edit'"  title="Kochbuch bearbeiten"><i class="material-icons btn_i">edit</i></button>
                        <button class="normalbtn" onclick="window.location.href='/kochbuecher/{{$k->kID}}/destroy'"  title="Kochbuch löschen"><i class="fas fa-trash-alt btn_i"></i></button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <button class="normalbtn" onclick="window.location.href='kochbuecher/create'" ><i class="material-icons btn_i">add_circle</i> Neues Kochbuch erstellen</button>
    </section>
@endsection