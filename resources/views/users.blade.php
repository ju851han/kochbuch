@extends('layouts.app')

@section('content')
    <section>
        <h2>Nutzer</h2>
        @php
            $rows = DB::select('SELECT name,email FROM USERS');
        @endphp

        <table class="table">
            <thead class="thead_orangered">
            <tr>
                <th>Name</th>
                <th>E-Mail</th>
                <!--TODO Rolle-->
            </tr>
            </thead>
            <tbody class="background2ndTR">
            @foreach ($rows as $u)
                <tr>
                    <td> {{  $u->name }} </td>
                    <td> {{  $u->email }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection