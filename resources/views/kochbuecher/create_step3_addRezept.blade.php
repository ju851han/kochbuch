@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-xs-auto col-md-8 offset-md-2">
                <h2>Kochbuch erstellen</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">1. Name eingeben</li>
                        <li class="breadcrumb-item active" aria-current="page">2. Zutaten eingeben</li>
                    <li class="breadcrumb-item active" aria-current="page">3. Rezepte hinzufügen</li>
                    </ol>
                </nav>
                <form method="post" action="/kochbuecher/create_2">
                    @csrf
                    
                </form>
            </section>
        </div>
    </div>
    <!-- Quelle https://www.w3schools.com/html/tryit.asp?filename=tryhtml_form_submit-->
@endsection