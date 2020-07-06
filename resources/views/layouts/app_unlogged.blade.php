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
        <img id="img-header-background-large" src="{{asset('img/Arbeitsflaeche_groß.jpeg')}}" alt="Arbeitsfläche"/>

        <h1 id="header-ueberschrift">Kochbuch</h1>

    </figure>
</header>
<nav class="navbar navbar-expand-md navbar-dark sticky-top">
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
                @if (Route::currentRouteName()=='register'||Route::currentRouteName()=='login')
                        <li class="nav-item"><a class="a_nav nav-link text-white" href="/">Willkommensseite</a>
                        </li>
                @else
                        <li class="nav-item"><a class="a_nav nav-link text-white" href="#hauptfunktionalitäten">Hauptfunktionalitäten</a>
                </li>
                <li class="nav-item"><a class="a_nav nav-link text-white" href="#anwendungsfall">Wofür & wozu?</a></li>
                <li class="nav-item"><a class="a_nav nav-link text-white" href="#über-uns">Über Uns</a></li>
                    @endif
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
@yield('content') <!-- Patzhalter für eigenen Inhalt -->
</main>
<footer class="fixed-bottom">
    <a href="/impressum">Impressum</a>
    <a href="#">Datenschutz</a>
    <a href="/kontakt">Kontakt</a>
    <a href="#">FAQ</a>
</footer>
<div class="modal fade cookieModal" id="cookieModal" tabindex="-1" role="dialog" aria-labelledby="cookieModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 id="cookieModalLabel">Cookie Information and Consent Request</h2>
            </div>
            <div class="modal-body">
                <h4>Einstellung zu Cookies</h4>
                <p>Wenn Sie über 16 Jahre sind, klicken Sie auf „Ich bin einverstanden“, um allen Verarbeitungszwecken zuzustimmen. Bei der Benutzung unserer Seite stimmen Sie der Verarbeitung von Cookies zu.</p>
                <p>
                    <a href="/privacy-statement" target="_blank">Click here to view our cookie policy</a>
                </p>
            </div>
            <div class="modal-footer">
                <button id="cookieModalConsent" type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal">Ich bin einverstanden</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
