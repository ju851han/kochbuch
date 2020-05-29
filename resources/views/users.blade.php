@extends('layouts.app')

@section('content')
    <section>
        <h2>Nutzer</h2>
        <table class="table">
            <thead class="thead_orangered">
            <tr>
                <th>Name</th>
                <th>E-Mail</th>
                <!--TODO Rolle-->
            </tr>
            </thead>
            <tbody class="background2ndTR">
            @foreach ($users as $u)
                <tr>
                    <td> {{  $u->name }} </td>
                    <td> {{  $u->email }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection