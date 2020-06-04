@extends('layouts.app')

@section('content')
    <section>
        <h2><i class="fa fa-book"></i> Kochbücher</h2>
        <table class="table">
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
                    <td> <button class="normalbtn"><a href="/kochbuecher/{{$k->kID}}/edit" class="a_noformat" title="Kochbuch bearbeiten"><i class="material-icons">edit</i></a></button>
                        <button class="normalbtn"><a href="/kochbuecher/{{$k->kID}}/destroy" class="a_noformat" title="Kochbuch löschen"><i class='fas fa-trash-alt'></i></a></button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <button class="normalbtn"><a  href="kochbuecher/create" class="a_noformat"><i class="material-icons">add_circle</i> Neues Kochbuch erstellen</a></button>
    </section>
@endsection