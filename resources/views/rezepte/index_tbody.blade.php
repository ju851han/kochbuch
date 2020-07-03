@foreach ($rezepte as $r)
    <tr id="{{$r->rID}}">
        <td>
            {{--            <button id="btn_{{$r->rID}}" class="btn-primary" data-toggle="collapse" data-target="#tr_{{$r->rID}}">+
                        </button>--}}
            <button id="btn_{{$r->rID}}" class="btn-primary" onclick="show_details({{$r->rID}});">+
            </button>
        </td>
        <td> {{  $r->rName }} </td>
        <td> {{  $r->zeit }} min</td>
        <td> {{  $r->kostenjePortion }} €</td>
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
    {{-- <tr id="tr_{{$r->rID}}" class="collapse">
         <td colspan="5">Kategorie: {{$r->kategorie}} <br>
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
             </table>
     </tr>--}}
@endforeach

<script>
    function show_details(rID) {
        console.log('start' + $('#z_' + rID).length);
        if ($('#z_' + rID).length === 0) {
            console.log('if');
            $('#z_' + rID).fadeOut('slow');
            @foreach($rezepte as $r)
            if (rID == "{{$r->rID}}") {
                $('#' + rID).last().after("<tr id=\"z_{{$r->rID}}\"><td colspan=\"5\">Kategorie: {{$r->kategorie}} <br>\n" +
                    " <table class=\" col-8 col-md-6 align-self-center\">\n" +
                    "                    <thead>\n" +
                    "                    <tr>\n" +
                    "                        <th class=\"bg-white\">Menge</th>\n" +
                    "                        <th class=\"bg-white\">Zutat</th>\n" +
                    "                    </tr>\n" +
                    "                    </thead>\n" +
                    "                    <tbody id=\"zutaten\" class=\"background2ndTR\">\n" +
                    "                    {{--https://stackoverflow.com/questions/26566675/getting-the-value-of-an-extra-pivot-table-column-laravel--}}\n" +
                    "                    @foreach($r->zutats  as $zutat )\n" +
                    "                        <tr>\n" +
                    "                            <td> {{$r->zutats()->where('zutat_zName',$zutat->zName)->first()->pivot->menge}} {{$zutat->mengeneinheit}}</td>\n" +
                    "                            <td>{{ $zutat->zName }}</td>\n" +
                    "                        </tr>\n" +
                    "                    @endforeach\n" +
                    "                    </tbody>\n" +
                    "                </table></tr>");
            }
            @endforeach

        } else {
            console.log('else');
            $('#z_' + rID).fadeIn('slow');
        }
        $('#btn_' + rID).replaceWith("<button id=\"btn_"+rID+"\" class=\"btn-primary\" onclick=\"hide_details(" + rID + ");\">-</button>");
    }

    function hide_details(rID){
        console.log('hide')
        $('#z_' + rID).hide();
        $('#btn_' + rID).replaceWith("<button id=\"btn_"+rID+"\" class=\"btn-primary\" onclick=\"show_details("+rID+");\">+</button>");
    }

</script>