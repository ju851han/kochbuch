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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
            <img class="koch zwinkert" src="{{asset('img/Koch.png')}}" alt="Koch"/>
            <img class="koch augen_offen" src="{{asset('img/Koch_Augen_offen.png')}}" alt="Koch"/>
        </div>
        <img id="img-header-background" src="{{asset('img/Arbeitsflaeche.jpeg')}}" alt="Arbeitsfläche"/>
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
                <li class="nav-item"><a class="a_nav nav-link text-white" href="/kochbuecher">Kochbücher</a></li>
                <li class="nav-item"><a class="a_nav nav-link text-white" href="/rezepte">Rezepte</a></li>
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
@yield('content') <!-- Patzhalter für eigenen Inhalt -->
</main>
<footer class="fixed-bottom">
    <a href="#">Impressum</a>
    <a href="#">Datenschutz</a>
    <a href="#">Kontakt</a>
    <a href="#">FAQ</a>
</footer>
</body>
</html>
