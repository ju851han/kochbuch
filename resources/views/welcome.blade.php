@extends('layouts.app_unlogged')

@section('content')
    <div class="container-fluid"
    >
        <section class="row">
            <div class="col-xs-10 offset-xs-1 col-md-10 offset-md-1">
                <h2 id="special" class="center">Herzlich Willkommen</h2>
                <p>Sie sind auf der Suche nach einem digitalen Kochbuch zur Verwaltung von Rezepten mit Wochenkochplan,
                    Einkaufsliste uvm.? Dann sind Sie hier richtig! Egal, ob Hobbykoch oder blutiger Kochanfänger. Hier
                    ist für jeden etwas dabei. Es dreht sich alles rundum das Kochen.</p>
            </div>
        </section>
        <section id="hauptfunktionalitäten" class="background row">
            <div class="col-xs-10 offset-xs-1 col-md-6 offset-md-3">
                <h2 class="center">Welche Leistungen werden angeboten?</h2>

                <table class="tbl_hauptfunktionen center">
                    <tr>
                        <td>
                            <a class="a_noformat" href="#kochbuch"><i class="fa fa-book i_dot"></i></a>
                        </td>
                        <td>
                            <a class="a_noformat" href="#suchfunktion"><i class="fa fa-search i_dot"></i></a>
                        </td>
                        <td>
                            <a class="a_noformat" href="#wochenkochplan"><i class="fas fa-calendar-week i_dot"></i></a>
                        </td>
                        <td>
                            <a class="a_noformat" href="#einkaufsliste"><i class="fas fa-list-alt i_dot"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a class="a_noformat" href="#kochbuch">
                                <p>Kochbuch</p>
                            </a>
                        </td>
                        <td>
                            <a class="a_noformat" href="#suchfunktion">
                                <p>Suchfunktion<br>für Rezepte</p>
                            </a>
                        </td>
                        <td>
                            <a class="a_noformat" href="#wochenkochplan">
                                <p>Wochenkochplan</p>
                            </a>
                        </td>
                        <td>
                            <a class="a_noformat" href="#einkaufsliste">
                                <p>Einkaufsliste</p>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </section>
        <section id="anwendungsfall" class="background2ndSection row">
            <h2 class="center col-xs-10 offset-xs-1 col-md-10 offset-md-1">Wofür ist ein digitales Kochbuch gut?</h2>
            <section id="kochbuch" class="col-xs-10 offset-xs-1 col-md-12">
                <div class="row">
                    <div class="center col-xs-9 offset-xs-1 col-md-1 offset-md-1 order-md-1">
                        <i class="fa fa-book i_dot"></i>
                    </div>
                    <div class="col-xs-9 offset-xs-1 col-md-9 order-md-2">
                        <h4>Rezept verloren?</h4>
                        <p> Ausgeschnittene Rezepte von Zeitschriften sind plötzlich verschwunden, das Lieblingsrezept
                            ist nicht auffindbar und die herausgesuchten Online-Rezepte sind offline. Kennen Sie diese
                            Probleme? Um sich diesen Ärger zu entgehen, können Sie sich einfach hier Ihre Rezepte in ein
                            <em>digitales Kochbuch</em> archivieren. Im Inhaltsverzeichnis können die Rezepte einfach
                            und problemlos jederzeit abgerufen werden.</p>
                    </div>
                </div>
            </section>
            <section id="suchfunktion" class="col-xs-10 offset-xs-1 col-md-12">
                <div class="row">
                    <div class="center col-xs-9 offset-xs-1 col-md-1 order-md-2">
                        <i class="fa fa-search i_dot"></i>
                    </div>
                    <div class="col-xs-9 offset-xs-1 col-md-9 offset-md-1 order-md-1">
                        <h4>Gegen Lebensmittelverschwendung & Ideenlosigkeit.</h4>
                        <p> Für die Resteverwertung kann mithilfe der <em>Suchfunktion</em> für die übrig gebliebene
                            Zutat ein Rezept, in der sie verarbeitet werden kann, gefunden werden. Ebenso können Sie in
                            unserer Rezepte-Übersicht gerne nach neuen Rezeptideen einfach nur schmökern oder auch die
                            Rezepte nach Zeit, Kosten und Kategorien filtern.</p>
                    </div>
                </div>
            </section>
            <section id="wochenkochplan" class="col-xs-10 offset-xs-1 col-md-12">
                <div class="row">
                    <div class="center col-xs-9 offset-xs-1 col-md-1 offset-md-1 order-md-1">
                        <i class="fas fa-calendar-week i_dot"></i>
                    </div>
                    <div class="col-xs-9 offset-xs-1 col-md-9 order-md-2">
                        <h4>Organisiert durch die Woche kochen.</h4>
                        <p> Damit Sie nicht der Hunger plagen muss und Sie lange herumüberlegen, was Sie am besten
                            kochen, gibt es einen <em>Wochenkochplan</em>. In diesem können Sie ganz einfach einstellen,
                            an welchen Tag Sie welches Rezept kochen möchten. Anhand dessen wird automatisch eine
                            Einkaufsliste generiert.</p>
                    </div>
                </div>
            </section>
            <section id="einkaufsliste" class="col-xs-10 offset-xs-1 col-md-12">
                <div class="row">
                    <div class="center col-xs-9 offset-xs-1 col-md-1 order-md-2">
                        <i class="fas fa-list-alt i_dot"></i>
                    </div>
                    <div class="col-xs-9 offset-xs-1 col-md-9 offset-md-1 order-md-1">
                        <h4>Strukturiert einkaufen.</h4>
                        <p> Sie stehen vor dem Regal im Lebensmittelmarkt und es fällt Ihnen einfach nicht ein, welches
                            Produkt Sie einkaufen wollten. Kennen Sie diese Situation? Den Ärger können Sie sich
                            zukünftig mithilfe der strukturierten <em>Einkaufsliste</em>, eine gruppierte Check-Liste
                            ist, ersparen. Dadurch wird ein schnelles Einkaufen ermöglicht, ohne dass eine Zutat
                            vergessen wird.</p>
                    </div>
                </div>
            </section>
        </section>
        <aside class="row">
            <div class="col-xs-10 offset-xs-1 col-md-10 offset-md-1">
                <h3>Haben wir Ihr Interesse geweckt?</h3>
                <p>Registrieren Sie sich kostenlos und nutzen Sie die zahlreichen Vorteile dieser Web-Applikation. <a
                            href="{{ route('register') }}">Hier</a> geht es zur Registrierung. </p></div>
        </aside>
        <section id="über-uns" class="row">
            <div class="col-xs-10 offset-xs-1 col-md-10 offset-md-1">
                <h2 class="center">Über Uns</h2>
                <p>
                    Unser Ziel ist es, eine benutzerfreundliche und intuitive Web-Applikation bereitzustellen, und geben
                    unser Bestes dieses zu erreichen. Wir wollen damit einen Mehrwert für das Kocherlebnis für Köche
                    aller Art (sei es blutige Kochanfänger, Hobbyköche oder Experimentierfreudige) bieten. Dabei gehen
                    aber auch Themen wie Nachhaltigkeit und Innovation bei uns nicht unter.
                </p>
            </div>
        </section>
        <aside class="row">
            <div class="col-xs-10 offset-xs-1 col-md-10 offset-md-1">
                <h3>Haben Sie Fragen oder wollen Sie uns ein Feedback geben?</h3>
                <p>Gerne sind wir über das <a href="/kontakt">Kontaktformular</a> für Sie erreichbar.</p>
            </div>
        </aside>
        <div class="row">
        <q class="col-xs-6 offset-xs-3 col-md-6 offset-md-3"> Wir wünschen Ihnen viel Spaß beim Kochen!<br>Bon Appétit!</q>
        </div>
    </div>
@endsection