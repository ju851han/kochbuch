@extends('layouts.app')

@section('content')
    <h1>Rezept: XY</h1>
    <!-- https://mdbootstrap.com/docs/jquery/forms/search/ -->
    <label for="portion">Portion(en):</label><input id="portion" name="portion" type="number" step="0.5" min="0" max="50">
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
            <tr>
                <td> {{  $r->rName }} </td>
                <td> {{  $r->kategorie }}</td>
                <td> {{  $r->zeit }}</td>
                <td> {{  $r->kostenjePortion }}</td>
            </tr>
    </table>
@endsection