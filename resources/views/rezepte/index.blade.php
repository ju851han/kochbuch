@extends('layouts.app')

@section('content')
    <h2>Rezepte Übersicht</h2>
    <table class="table">
        <thead class="thead_orangered">
        <tr>
            <th>Rezept Name</th>
            <th>Kategorien</th>
            <th>Zeit</th>
            <th>Kosten</th>
        </tr>
        </thead>
        <tbody class="background2ndTR">
        @foreach ($rezepte as $r)
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