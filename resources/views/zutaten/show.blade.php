@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-12 col-md-8 offset-md-2">
                <h2>Zutat: {{  $z->zName }}</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Produktgruppe</th>
                        <th>Kosten je Einheit</th>
                        <th>Mengeneinheit</th>
                    </tr>
                    </thead>
                    <tbody class="background2ndTR">
                    <tr>
                        <td> {{  $z->produktgruppe }}</td>
                        <td> {{  $z->kostenjeEinheit }} €</td>
                        <td> {{  $z->mengeneinheit }}</td>
                    </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
@endsection
