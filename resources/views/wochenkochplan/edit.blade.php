@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-xs-auto col-md-8 offset-md-2">
                <h2>Wochenkochplan <i class="fas fa-calendar-week"></i></h2>
                <table>
                    <thead>
                    <tr>
                        <th>Wochentag</th>
                        <th>geplantes Rezept</th>
                        <th>Zeit</th>
                        <th>Kosten</th>
                        <th>Portion</th> <!--TODO Portion eingeben ->  Kosten berechnen lassen -->
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Montag</td>
                        <td>
                            <button>Rezept hinzufügen</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Dienstag</td>
                        <td>
                            <button>Rezept hinzufügen</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Mittwoch</td>
                        <td>
                            <button>Rezept hinzufügen</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Donnerstag</td>
                        <td>
                            <button>Rezept hinzufügen</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Freitag</td>
                        <td>
                            <button>Rezept hinzufügen</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Samstag</td>
                        <td>
                            <button>Rezept hinzufügen</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Sonntag</td>
                        <td>
                            <button>Rezept hinzufügen</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <button>Einkaufsliste erstellen</button>
                <br>
                <button type="reset" value="Entleeren">Entleeren</button> <!-- reset = Formulardaten werden gelöscht-->
                <button type="submit" value="Speichern">Speichern</button>
            </section>
        </div>
    </div>
@endsection