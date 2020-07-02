@foreach ($rezepte as $r)
    <tr>
        <td>
            <button id="btn_{{$r->rID}}" class="btn-primary" data-toggle="collapse" data-target="#tr_{{$r->rID}}">+</button>
        </td>
        <td> {{  $r->rName }} </td>
        <td> {{  $r->zeit }} min</td>
        <td> {{  $r->kostenjePortion }} €</td>
        <td>
            <button id="collapse" class="normalbtn btn"
                    onclick="window.location.href='/rezepte/{{$r->rID}}'"
                    title="Rezept ansehen"><i class='fas fa-eye btn_i'></i></button>
            @if (Auth::user()->hasRole('admin'))
                <button class="normalbtn btn"
                        onclick="window.location.href='/rezepte/{{$r->rID}}/edit_step1'"
                        title="Rezept bearbeiten"><i class="material-icons btn_i">edit</i></button>
                <button class="normalbtn btn"
                        onclick="window.location.href='/rezepte/{{$r->rID}}/destroy'"
                        title="Rezept löschen"><i class="fas fa-trash-alt btn_i"></i></button>
            @endif
        </td>
    </tr>
    <tr id="tr_{{$r->rID}}" class="collapse"><td colspan="5">Kategorie: {{$r->kategorie}} <br>
            <table class=" col-8 col-md-6 align-self-center">
                <thead>
                <tr>
                    <th class="bg-white">Menge</th>
                    <th class="bg-white">Zutat</th>
                </tr>
                </thead>
                <tbody class="background2ndTR">
                @foreach($r->zutats  as $zutat )
                    <tr>
                        <td> {{$r->zutats()->where('zutat_zName',$zutat->zName)->first()->pivot->menge}} {{$zutat->mengeneinheit}}</td>
                        <td>{{ $zutat->zName }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table></tr>
@endforeach