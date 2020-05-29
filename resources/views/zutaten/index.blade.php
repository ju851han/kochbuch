@extends('layouts.app')

@section('content')
    <h2>Zutaten</h2>
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
        @foreach ($zutaten as $z)
            <tr>
                <td> {{  $z->zName }} </td>
                <td> {{  $z->mengeneinheit }}</td>
                <td> {{  $z->kostenJeEinheit }}</td>
                <td> {{  $z->produktgruppe }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection