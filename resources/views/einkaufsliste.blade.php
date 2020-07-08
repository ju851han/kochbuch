@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-check">
            <section class="col-12 col-md-8 offset-md-2">
                <h2><i class="fas fa-list-alt"></i> Einkaufsliste</h2>
                <section>
                    @if(count($backartikel)>0)
                        <h3>Backartikel</h3>
                        @foreach($backartikel as $b)
                            <div class="form-check"><input type="checkbox" class="form-check-input"> <label class="form-check-label"> {{ $b}}</label> </div>
                        @endforeach
                    @endif
                </section>
                <section>
                    @if(count($backwaren)>0)
                        <h3>Backwaren</h3>
                        @foreach($backwaren as $b)
                            <div class="form-check"><input type="checkbox" class="form-check-input"> <label class="form-check-label"> {{ $b}}</label> </div>
                        @endforeach
                    @endif
                </section>
                <section>
                    @if(count($fisch)>0)
                        <h3>Fisch & Meeresfrüchte</h3>
                        @foreach($fisch as $f)
                            <div class="form-check"><input type="checkbox" class="form-check-input"> <label class="form-check-label">  {{ $f}}</label> </div>
                        @endforeach
                    @endif
                </section>
                <section>
                    @if(count($fleisch)>0)
                        <h3>Fleisch</h3>
                        @foreach($fleisch as $f)
                            <div class="form-check"><input type="checkbox" class="form-check-input"> <label class="form-check-label">  {{ $f}}</label> </div>
                        @endforeach
                    @endif
                </section>
                <section>
                    @if(count($grundnahrungsprodukt)>0)
                        <h3>Grundnahrungsprodukt</h3>
                        @foreach($grundnahrungsprodukt as $g)
                            <div class="form-check"><input type="checkbox" class="form-check-input"> <label class="form-check-label"> {{ $g}}</label> </div>
                        @endforeach
                    @endif
                </section>
                <section>
                    @if(count($gewuerze)>0)
                        <h3>Gewürze</h3>
                        @foreach($gewuerze as $g)
                            <div class="form-check"><input type="checkbox" class="form-check-input"> <label class="form-check-label"> {{ $g}}</label> </div>
                        @endforeach
                    @endif
                </section>
                <section>
                    @if(count($milchprodukt)>0)
                        <h3>Milchprodukte</h3>
                        @foreach($milchprodukt as $m)
                            <div class="form-check"><input type="checkbox" class="form-check-input"> <label class="form-check-label"> {{ $m}}</label> </div>
                        @endforeach
                    @endif
                </section>
                <section>
                    @if(count($obst)>0)
                        <h3>Obst & Gemüse</h3>
                        @foreach($obst as $o)
                            <div class="form-check"><input type="checkbox" class="form-check-input"> <label class="form-check-label"> {{ $o}}</label> </div>
                        @endforeach
                    @endif
                </section>
            </section>
        </div>
    </div>
@endsection