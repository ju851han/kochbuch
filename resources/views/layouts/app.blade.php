<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Kochbuch, Rezepte, Rezeptsuche, Einkaufsliste, Wochenkochplan, Kochplan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Julia Hansi">
    <title>Kochbuch</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
    <!-- Icons -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Stylesheet -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>

</head>
<body>
<header>
    <figure>
        <div class="koch_animation">
            <img class="koch zwinkert" src="{{asset('img/Koch.png')}}" alt="Koch"/>
            <img class="koch augen_offen" src="{{asset('img/Koch_Augen_offen.png')}}" alt="Koch"/>
        </div>
        <img id="img-header-background" src="{{asset('img/Arbeitsflaeche.jpeg')}}" alt="Arbeitsfläche"/>
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
                <li class="nav-item"><a class="a_nav nav-link text-white" href="{{ url('/home') }}">Home</a>
                </li>
                <li class="nav-item"><a class="a_nav nav-link text-white" href="/kochbuecher">Kochbücher</a></li>
                <li class="nav-item"><a class="a_nav nav-link text-white" href="/rezepte">Rezepte</a></li>
                @if (Auth::user()->hasRole('admin'))
                    <li class="nav-item"><a class="a_nav nav-link text-white" href="/zutaten">Zutaten</a></li>
                    <li class="nav-item"><a class="a_nav nav-link text-white" href="/users">Benutzer</a></li>
                @endif
                <li class="nav-item"><a class="a_nav nav-link text-white" href="/wochenkochplan">Wochenkochplan</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="a_nav nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="a_nav nav-link text-white" href="{{ route('register') }}">Registrierung</a>
                        </li>
                    @endif
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
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if (Session::has('alert-' . $msg))
            <div class="alert alert-{{ $msg }} col-12 col-md-8 offset-md-2">{{ Session::get('alert-' . $msg) }}</div>
        @endif
    @endforeach

@yield('content') <!-- Patzhalter für eigenen Inhalt -->
</main>
<footer class="fixed-bottom">
    <a href="/impressum">Impressum</a>
    <a href="/datenschutz">Datenschutz</a>
    <a href="/kontakt">Kontakt</a>
</footer>
<div class="modal fade cookieModal" id="cookieModal" tabindex="-1" role="dialog" aria-labelledby="cookieModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 id="cookieModalLabel">Cookie Information and Consent Request</h2>
            </div>
            <div class="modal-body">
                <h4>Einstellung zu Cookies</h4>
                <p>Wenn Sie über 16 Jahre sind, klicken Sie auf „Ich bin einverstanden“, um allen Verarbeitungszwecken
                    zuzustimmen. Bei der Benutzung unserer Seite stimmen Sie der Verarbeitung von Cookies zu.</p>
                <p>
                    <a href="/privacy-statement" target="_blank">Click here to view our cookie policy</a>
                </p>
            </div>
            <div class="modal-footer">
                <button id="cookieModalConsent" type="button" class="btn btn-primary btn-lg btn-block"
                        data-dismiss="modal">Ich bin einverstanden
                </button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
