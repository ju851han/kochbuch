@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-xs-auto col-md-8 offset-md-2">
                <h2>Zutat</h2>
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
                    <tr>
                        <td> {{  $z->zName }} </td>
                        <td> {{  $z->mengeneinheit }}</td>
                        <td> {{  $z->kostenJeEinheit }}</td>
                        <td> {{  $z->produktgruppe }}</td>
                    </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
@endsection
