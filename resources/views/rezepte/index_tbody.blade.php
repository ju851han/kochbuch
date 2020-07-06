@foreach ($rezepte as $r)
    <tr id="{{$r->rID}}">
        <td>
            <button id="btn_{{$r->rID}}" class="btn-primary" onclick="rezepte.show_details({{$r->rID}});">+
            </button>
        </td>
        <td> {{  $r->rName }} </td>
        <td> {{  $r->zeit }} min</td>
        <td class="text-center"> {{  number_format($r->kostenjePortion,2,",", "." ) }} €</td>
        <td>
            <button class="normalbtn btn"
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
@endforeach
