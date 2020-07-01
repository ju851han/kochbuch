@extends('layouts.app') <!-- bedeutet dass eine exisitierende Template wird verwendet -->

@section('content') <!-- Referenz damit Template Engine weiß, an welcher Stelle des Templates der u.a. Text eingefügt wird-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    {{--TODO links--}}
    <div class="row text-center justify-content-center">
        <div class="col-3 abortbtn" onclick="window.location.href='/kochbuecher'">
            <br>
            <i class="fa fa-book"></i>
            <p>Kochbücher</p>
        </div>
        <div class="col-3 normalbtn" onclick="window.location.href='/rezepte'">
            <br>
            {{--TODO insert rezept icon--}}
            <p>Rezepte</p>
        </div>
    </div>
    <div class="row justify-content-center text-center">
        <div class="col-3 finishbtn"onclick="window.location.href='/wochenkochplan'">
            <br>
            <i class="fas fa-calendar-week"></i>
            <p>Wochenkochplan</p>
        </div>
        <div class="col-3 bluebtn">{{--TODO href onclick="window.location.href='/einkaufsliste'"--}}            {{--TODO btn blue--}}
            <br>
            <i class="fas fa-list-alt"></i>
            <p>Einkaufsliste</p>
        </div>
    </div>
</div>
@endsection
