@extends('layouts.app') <!-- bedeutet dass eine exisitierende Template wird verwendet -->

@section('content') <!-- Referenz damit Template Engine weiß, an welcher Stelle des Templates der u.a. Text eingefügt wird-->
<div class="container">
    <br>
    <div class="row text-center justify-content-center">
        <div class="col-5 col-md-3 abortbtn" onclick="window.location.href='/kochbuecher'">
            <br>
            <i class="fa fa-book"></i>
            <p>Kochbücher</p>
        </div>
        <div class="col-5 col-md-3 normalbtn" onclick="window.location.href='/rezepte'">
            <br>
            <i class="material-icons">local_dining</i>
            <p>Rezepte</p>
        </div>
    </div>
    <div class="row justify-content-center text-center">
        <div class="col-5 col-md-3 finishbtn" onclick="window.location.href='/wochenkochplan'">
            <br>
            <i class="fas fa-calendar-week"></i>
            <p>Wochenkochplan</p>
        </div>
        <div class="col-5 col-md-3 bluebtn" onclick="window.location.href='/einkaufsliste'">
            <br>
            <i class="fas fa-list-alt"></i>
            <p>Einkaufsliste</p>
        </div>
    </div>
</div>
@endsection
