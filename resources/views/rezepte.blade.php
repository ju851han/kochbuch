@extends('layouts.app')

@section('content')
    <h2>Rezepte Übersicht</h2>
    @php
        $rows = DB::select('SELECT rname, kategorie, zeit, kostenjeportion FROM REZEPTE');
    @endphp
    <table class="table">
        <thead>
        <tr>
            <th>Rezept Name</th>
            <th>Kategorien</th>
            <th>Zeit</th>
            <th>Kosten</th>
        </tr>
        </thead>
        <tbody class="background2ndTR">
        <tr>
        @foreach ($rows as $r)
            <tr>
                <td> {{  $r->rname }} </td>
                <td> {{  $r->kategorie }}</td>
                <td> {{  $r->zeit }}</td>
                <td> {{  $r->kostenjeportion }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection