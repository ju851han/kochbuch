@extends('layouts.app')

@section('content')
    <section>
        <h2>Kochbücher</h2>
        @php
            $rows = DB::select('SELECT kid,kname FROM KOCHBUECHER');
        @endphp

        <table class="table">
            <thead class="thead_orangered">
            <tr>
                <th>Kochbuch-Nr.</th>
                <th>Name</th>
            </tr>
            </thead>
            <tbody class="background2ndTR">
            @foreach ($rows as $k)
                <tr>
                    <td> {{  $k->kid }} </td>
                    <td> {{  $k->kname }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection