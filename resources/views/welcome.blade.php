<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Kochbuch, Rezepte, Rezeptsuche, Einkaufsliste, Wochenkochplan, Kochplan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Julia Hansi">
    <title>Willkommen - Kochbuch</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
    <!-- Icons -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Stylesheet -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--<link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet">--}}
</head>
<body>
<header>
    <figure>
        <div class="koch_animation">
            <img class="koch zwinkert" src="{{ asset('img/Koch.png') }}" alt="Koch"/>
            <img class="koch augen_offen" src="{{ asset('img/Koch_Augen_offen.png') }}" alt="Koch"/>
        </div>
        <img id="img-header-background" src="{{ asset('img/Arbeitsflaeche.jpeg') }}" alt="Arbeitsfläche"/>
        <h1 id="header-ueberschrift">Kochbuch</h1>

    </figure>
</header>
<nav class="navbar navbar-expand-md navbar-dark"><!--navbar navbar-expand-md navbar-light bg-white shadow-sm-->
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item"><a class="a_nav nav-link text-white" href="{{ url('/home') }}">Home</a>
                        </li>
                    @else
                        <li class="nav-item"><a class="a_nav nav-link text-white" href="{{ route('login') }}">Login</a>
                        </li>

                        @if (Route::has('register'))
                            <li class="nav-item"><a class="a_nav nav-link text-white" href="{{ route('register') }}">Registierung</a>
                            </li>
                        @endif
                    @endauth
                @endif
                <li class="nav-item"><a class="a_nav nav-link text-white" href="/rezepte">Rezepte</a></li>
                <li class="nav-item"><a class="a_nav nav-link text-white" href="#hauptfunktionalitäten">Hauptfunktionalitäten</a>
                </li>
                <li class="nav-item"><a class="a_nav nav-link text-white" href="#anwendungsfall">Wofür & wozu?</a></li>
                <li class="nav-item"><a class="a_nav nav-link text-white" href="#über-uns">Über Uns</a></li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<main>
    <section>
        <h2 id="special" class="center">Herzlich Willkommen</h2>
        <p>Sie sind auf der Suche nach einem digitalen Kochbuch zur Verwaltung von Rezepten mit Wochenkochplan,
            Einkaufsliste uvm.? Dann sind Sie hier richtig! Egal, ob Hobbykoch oder blutiger Kochanfänger. Hier ist
            für jeden etwas dabei. Es dreht sich alles rundum das Kochen.</p>
    </section>
    <section id="hauptfunktionalitäten" class="background">
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
    </section>
    <section id="anwendungsfall" class="background2ndSection">
        <h2 class="center">Wofür ist ein digitales Kochbuch gut?</h2>
        <section id="kochbuch">
            <div class="center">
                <i class="fa fa-book i_dot"></i>
            </div>
            <h4>Rezept verloren?</h4>
            <p> Ausgeschnittene Rezepte von Zeitschriften sind plötzlich verschwunden, das Lieblingsrezept ist nicht
                auffindbar und die herausgesuchten Online-Rezepte sind offline. Kennen Sie diese Probleme? Um sich
                diesen Ärger zu entgehen, können Sie sich einfach hier Ihre Rezepte in ein <em>digitales
                    Kochbuch</em> archivieren. Im Inhaltsverzeichnis können die Rezepte einfach und problemlos
                jederzeit abgerufen werden.</p>
        </section>
        <section id="suchfunktion">
            <div class="center">
                <i class="fa fa-search i_dot"></i>
            </div>
            <h4>Gegen Lebensmittelverschwendung & Ideenlosigkeit.</h4>
            <p> Für die Resteverwertung kann mithilfe der <em>Suchfunktion</em> für die übrig gebliebene Zutat ein
                Rezept, in der sie verarbeitet werden kann, gefunden werden. Ebenso können Sie in unserer
                Rezepte-Übersicht gerne nach neuen Rezeptideen einfach nur schmökern oder auch die Rezepte nach
                Zeit, Kosten und Kategorien filtern.</p>
        </section>
        <section id="wochenkochplan">
            <div class="center">
                <i class="fas fa-calendar-week i_dot"></i>
            </div>
            <h4>Organisiert durch die Woche kochen.</h4>
            <p> Damit Sie nicht der Hunger plagen muss und Sie lange herumüberlegen, was Sie am besten kochen, gibt
                es einen <em>Wochenkochplan</em>. In diesem können Sie ganz einfach einstellen, an welchen Tag Sie
                welches Rezept kochen möchten. Anhand dessen wird automatisch eine Einkaufsliste generiert.</p>
        </section>
        <section id="einkaufsliste">
            <div class="center">
                <i class="fas fa-list-alt i_dot"></i>
            </div>
            <h4>Strukturiert einkaufen.</h4>
            <p> Sie stehen vor dem Regal im Lebensmittelmarkt und es fällt Ihnen einfach nicht ein, welches Produkt
                Sie einkaufen wollten. Kennen Sie diese Situation? Den Ärger können Sie sich zukünftig mithilfe der
                strukturierten <em>Einkaufsliste</em>, eine gruppierte Check-Liste ist, ersparen. Dadurch wird ein
                schnelles Einkaufen ermöglicht, ohne dass eine Zutat vergessen wird.</p>
        </section>
    </section>
    <aside>
        <h3>Haben wir Ihr Interesse geweckt?</h3>
        <p>Registrieren Sie sich kostenlos und nutzen Sie die zahlreichen Vorteile dieser Web-Applikation. <a
                    href="{{ route('register') }}">Hier</a> geht es zur Registrierung. </p>
    </aside>
    <section id="über-uns">
        <h2 class="center">Über Uns</h2>
        <p>
            Unser Ziel ist es, eine benutzerfreundliche und intuitive Web-Applikation bereitzustellen, und geben
            unser Bestes dieses zu erreichen. Wir wollen damit einen Mehrwert für das Kocherlebnis für Köche aller
            Art (sei es blutige Kochanfänger, Hobbyköche oder Experimentierfreudige) bieten. Dabei gehen aber auch
            Themen wie Nachhaltigkeit und Innovation bei uns nicht unter.
        </p>
    </section>
    <aside>
        <h3>Haben Sie Fragen oder wollen Sie uns ein Feedback geben?</h3>
        <p>Gerne sind wir über das <a href="#">Kontaktformular</a> für Sie erreichbar.</p>
    </aside>
    <q> Wir wünschen Ihnen viel Spaß beim Kochen!<br>Bon Appétit!</q>
</main>
<footer>
    <a href="#">Impressum</a>
    <a href="#">Datenschutz</a>
    <a href="#">Kontakt</a>
    <a href="#">FAQ</a>
</footer>
</body>
</html>
