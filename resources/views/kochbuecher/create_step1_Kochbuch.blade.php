@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-12 col-md-8 offset-md-2">
                <h2>Kochbuch erstellen</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">1. Name des Kochbuches eingeben</li>
                    </ol>
                </nav>
                <form method="post" action="/kochbuecher/create_step4_overview">
                    @csrf
                    <div class="form-group">
                        <label for="kName">Name des Kochbuchs:</label>
                        <input class="form-control" id="kName" name="kName" type="text" minlength="2" required>
                    </div>
                    <br>
                    <div class="row justify-content-end">
                        <div>
                            <input type="reset" class="abortbtn btn" onclick="window.location.href='/kochbuecher/index'"
                                   value="Abbrechen">
                            <button class="normalbtn btn"
                                    onclick="window.location.href='/kochbuecher/create_step2a_addRezept'"><i
                                        class="material-icons btn_i">add_circle</i>Rezepte hinzufügen
                            </button>
                            <button class="normalbtn btn"
                                    onclick="window.location.href='/kochbuecher/create_step2b-1_createRezept'"><i
                                        class="material-icons btn_i">edit</i>Rezept erstellen
                            </button>
                            <input type="submit" class="finishbtn btn" value="Kochbuch fertig stellen">
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
    <!-- Quelle https://www.w3schools.com/html/tryit.asp?filename=tryhtml_form_submit-->
@endsection