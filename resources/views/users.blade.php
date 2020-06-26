@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-xs-auto col-md-8 offset-md-2">
                <h2>Nutzer <i class='fas fa-user'></i></h2>
                <table class="table">
                    <thead class="thead_orangered">
                    <tr>
                        <th>Name</th>
                        <th>E-Mail</th>
                        <th>Rolle</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class="background2ndTR">
                    @foreach ($users as $u)
                        <tr>
                            <td> {{  $u->name }} </td>
                            <td> {{  $u->email }}</td>
                            <td> {{  $u->role }}</td>
                            <td>
                                <button class="normalbtn"
                                        onclick="window.location.href='/users/{{$u->id}}/destroy'"
                                        title="Benutzer löschen"><i class="fas fa-trash-alt btn_i"></i></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </div>
@endsection