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
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="/kochbuecher/create_step3">
                    @csrf
                    <div class="form-group">
                        <label for="kName">Name des Kochbuchs:</label>
                        <input class="form-control" id="kName" name="kName" type="text" minlength="2" maxlength="125" required>
                    </div>
                    <br>
                    <div class="row justify-content-end">
                        <div>
                            <input type="reset" class="abortbtn btn" onclick="window.location.href='/kochbuecher/index'"
                                   value="Abbrechen">
                            <button type="submit" class="normalbtn btn" onclick="change_submitaction1();"> <i
                                        class="material-icons btn_i">add_circle</i>Rezepte hinzufügen
                            </button>
                            <button type="submit" class="normalbtn btn" onclick="change_submitaction2();"><i
                                        class="material-icons btn_i">edit</i>Rezept erstellen</button>
                            <input type="submit" class="finishbtn btn" value="Kochbuch fertig stellen">
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
    <script>
        function change_submitaction1(){
            $('form').attr("action","/kochbuecher/create_step2a");
        }
        function change_submitaction2(){
            $('form').attr("action","/kochbuecher/create_step2b_1");
        }
    </script>

@endsection