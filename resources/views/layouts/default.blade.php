<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>{{ config('app.name', 'LDD') }}</title>

   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Open+Sans:800|Open+Sans+Condensed:300" rel="stylesheet">

    <link rel="stylesheet" href="/css/sanitize.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/contact.css">
</head>
<body>

    <header>
        <div class="search-scart">
            <i class="fas fa-search fa-lg"></i>
            <div class="scart">
                <a href="#"><i class="fas fa-shopping-cart fa-lg"></i></a>
                <span class="badge">13</span>
            </div>
            <div class="ingreso">
                <ul>
                    @guest
                        <li>
                            <a href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                        </li>
                    @else
                        <li class="avatar-container">
                            <a><img src="{{ 'storage/' . Auth::user()->avatar }}"></a>
                            <span>
                                <div class="submenu-container">
                                    <div class="submenu-items">
                                    <ul>
                                        <li class="desplegable"><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Salir') }}
                                            </a></li>
                                        <li class="desplegable"><a href="{{ route('profile') }}">Perfil</a></li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                        </form>
                                    </ul>
                                    </div>
                                </div>
                            </span>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
        <hr style="border:0.2px solid #ccc; width: 80%;">
        <div class="logo-container">
            <a href="/"><img src="/img/logo.png" alt="logo"></a>
            <h4>RELOJES DE LUJO</h4>
        </div>

        <nav id="MainNavOuter">
            <span>Marca</span>
            <ul id="MainNav" class="">
                <li class="active"><a href="#">Breguet</a></li>
                <li><a href="#">Breitling</a></li>
                <li><a href="#">Cartier</a></li>
                <li><a href="#">Longines</a></li>
                <li><a href="#">Montblanc</a></li>
                <li><a href="#">Omega</a></li>
                <li><a href="#">Piaget</a></li>
                <li><a href="#">Rolex</a></li>
                <li><a href="#">TAG Heuer</a></li>
                <li class="last"><a href="#">Todos</a></li>
            </ul>
        </nav>

        <nav id="SubNavOuter">
            <span>Tipo</span>
            <ul id="SubNav" class="">
                <li class="active"><a href="#">Deportivo</a></li>
                <li><a href="#">Automático</a></li>
                <li><a href="#">Cronógrafo</a></li>
                <li><a href="#">Buceo</a></li>
                <li><a href="#">Smart</a></li>
                <li><a href="#">Vintage</a></li>
                <li class="last"> <a href="#">Todos</a></li>
            </ul>
        </nav>

        <nav id="GenderOuter">
            <span>Género</span>
            <ul id="Gender" class="">
                <li class="active"><a href="#">Hombre</a></li>
                <li><a href="#">Mujer</a></li>
                <li class="last"><a href="#">Todos</a></li>
            </ul>
        </nav>
    </header>

            @yield('content')

    <footer>
        <div class="container">
            <div class="primera-fila">
                <div class="foot-newsletter">
                    <h6>Lista de Correo</h6>
                    <form class="newsletter">
                        <div class="input-wrap">
                            <input type="text" placeholder="Ingresa tu email" name="email">
                            <button type="submit">Suscribirse</button>
                        </div>
                    </form>
                    <p style="margin-bottom: 0;">Recibe novedades y ofertas especiales</p>
                </div>

                <div class="foot-contacto">
                    <h6>Contacto</h6>
                    <address>
                        Lima 1111, CABA 1043
                    </address>
                    <a style="display: block" href="tel:+54 11 4248 7979">+54 11 4248 7979</a>
                    <a href="mailto:info@nyd.com">info@ldd.com</a>
                </div>
            </div>

            <div class="segunda-fila">
                <div class="foot-info">
                    <h6>Información</h6>
                    <ul>
                        <li><a href="/">Inicio</a></li>
                        <li><a href="#">Acerca de</a></li>
                        <li><a href="contacto">Contacto</a></li>
                        <li><a href="faq">FAQ</a></li>
                    </ul>
                </div>

                <div class="foot-social">
                    <h6>Seguinos</h6>
                    <ul>
                        <li id="instagram"><a href="#"><i class="fab fa-instagram fa-lg"></i> Instagram</a></li>
                        <li id="facebook"><a href="#"><i class="fab fa-facebook fa-lg"></i> Facebook</a></li>
                        <li id="pinterest"><a href="#"><i class="fab fa-pinterest fa-lg"></i> Pinterest</a></li>
                        <li id="twitter"><a href="#"><i class="fab fa-twitter fa-lg"></i> Twitter</a></li>
                    </ul>
                </div>
            </div>
            <p class="copyright">Copyright 2018 - LDD</p>
        </div>
    </footer>
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
</body>
</html>

