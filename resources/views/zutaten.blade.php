@extends('layouts.app')

@section('content')
{{--TODO Diese View löschen--}}
    <h2>Zutaten</h2>
    @php
        $rows = DB::select('SELECT zName, KostenjeEinheit, Mengeneinheit, Produktgruppe FROM ZUTATEN');
    @endphp
    <table class="table">
        <thead>
        <tr>
            <th>Zutaten Name</th>
            <th>Kosten je Einheit</th>
            <th>Mengeneinheit</th>
            <th>Produktgruppe</th>
        </tr>
        </thead>
        <tbody class="background2ndTR">
        @foreach ($rows as $z)
            <tr>
                <td> {{  $z->zName }} </td>
                <td> {{  $z->KostenjeEinheit }}</td>
                <td> {{  $z->Mengeneinheit }}</td>
                <td> {{  $z->Produktgruppe }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection