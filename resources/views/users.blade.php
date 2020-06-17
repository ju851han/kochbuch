@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Nutzer</h2>
        <table class="table">
            <thead class="thead_orangered">
            <tr>
                <th>Name</th>
                <th>E-Mail</th>
                <!--TODO Rolle-->
                <th></th>
            </tr>
            </thead>
            <tbody class="background2ndTR">
            @foreach ($users as $u)
                <tr>
                    <td> {{  $u->name }} </td>
                    <td> {{  $u->email }}</td>
                    <td><button class="normalbtn"
                                onclick="window.location.href='/users/{{$u->id}}/destroy'"
                                title="Benutzer löschen"><i class="fas fa-trash-alt btn_i"></i></button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection