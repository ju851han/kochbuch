@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-xs-auto col-md-8 offset-md-2">
                <h2>Kochbuch erstellen</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">1. Name des Kochbuches eingeben</li>
                    </ol>
                </nav>
                <form method="post" action="/kochbuecher/create_step2_addZutaten">
                    @csrf
                    <div class="form-group">
                        <label for="kName">Name des Kochbuchs:</label>
                        <input class="form-control" id="kName" name="kName" type="text" minlength="2" required>
                    </div>
                    <br>
                    <input type="reset" class="abortbtn btn" value="Abbrechen">
                    <!-- reset = Formulardaten werden gelöscht-->
                    <input type="submit" class="normalbtn btn" value="Nächste">
                </form>
            </section>
        </div>
    </div>
    <!-- Quelle https://www.w3schools.com/html/tryit.asp?filename=tryhtml_form_submit-->
@endsection