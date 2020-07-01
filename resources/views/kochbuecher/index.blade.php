@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-xs-auto col-md-8 offset-md-2">
                <h2><i class="fa fa-book"></i> Kochbücher</h2>
                <br>
                <table class="table tbl_kochbuecher">
                    <thead class="thead_orangered">
                    <tr>
                        <th>Nr.</th>
                        <th>Name</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class="background2ndTR">
                    <?php
                    $i = 1;
                    foreach ($kochbuecher as $k) {
                        echo "<tr><td>" . $i . "</td>";
                        $i++;
                        echo "<td>" . $k->kName . "</td>";
                        echo "<td><button class='normalbtn btn' onclick=\"window.location.href='/kochbuecher/" . $k->kID . "'\" title='Kochbuch ansehen'><i class='fas fa-eye btn_i'></i></button>";
                        echo "<button class='normalbtn btn' onclick=\"window.location.href='/kochbuecher/" . $k->kID . "/edit'\" title='Kochbuch bearbeiten'><i class='material-icons btn_i'>edit</i></button>";
                        echo "<button class='normalbtn btn' onclick=\"window.location.href='/kochbuecher/" . $k->kID . "/destroy'\" title='Kochbuch löschen'><i class='fas fa-trash-alt btn_i'></i></button></tr>";
                    }
                    ?>
                    </tbody>
                </table>
                <button class="normalbtn btn" onclick="window.location.href='/kochbuecher/create'"><i
                            class="material-icons btn_i">add_circle</i>
                    Neues Kochbuch erstellen
                </button>
            </section>
        </div>
    </div>
@endsection