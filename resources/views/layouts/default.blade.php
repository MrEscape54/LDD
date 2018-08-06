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
           <div class="search">
                <i class="fas fa-search fa-lg cart"></i>
                <input class="search-input" type="text" value="" placeholder="Buscar">
           </div>
            <div class="cart-plus-login">
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
                                <a><img src="/storage/{{Auth::user()->avatar }}"></a>
                                <span>
                                    <div class="submenu-container">
                                        <div class="submenu-items">
                                        <ul>
                                            <li class="desplegable"><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Salir') }}
                                                </a></li>
                                            <li class="desplegable"><a href="{{ route('users.user', Auth::user()->id) }}">Perfil</a></li>
                                            @if (Auth::user()->isAdmin === 1) 
                                                <li class="desplegable"><a href="{{ route('products.index') }}">Productos</a></li>
                                                <li class="desplegable"><a href="{{ route('categories.index') }}">Categorias</a></li>
                                                <li class="desplegable"><a href="{{ route('brands.index') }}">Marcas</a></li>
                                                <li class="desplegable"><a href="{{ route('users.index') }}">Usuarios</a></li>
                                            @endif
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
        </div>
        <hr style="border:0.2px solid #ccc; width: 80%;">
        <div class="logo-container">
            <a href="/"><img src="/img/logo.png" alt="logo"></a>
            <h4>RELOJES DE LUJO</h4>
        </div>

        <nav id="MainNavOuter">
            <span>Marca</span>
            <ul id="MainNav" class="">
                <li class="active"><a href="{{route('products.brand', 1)}}">Breguet</a></li>
                <li><a href="{{route('products.brand', 2)}}">Breitling</a></li>
                <li><a href="{{route('products.brand', 3)}}">Cartier</a></li>
                <li><a href="{{route('products.brand', 4)}}">Longines</a></li>
                <li><a href="{{route('products.brand', 5)}}">Montblanc</a></li>
                <li><a href="{{route('products.brand', 6)}}">Omega</a></li>
                <li><a href="{{route('products.brand', 7)}}">Piaget</a></li>
                <li><a href="{{route('products.brand', 8)}}">Rolex</a></li>
                <li><a href="{{route('products.brand', 9)}}">TAG Heuer</a></li>
                <li><a href="{{route('products.brand', 10)}}">Zenith</a></li>
                <li class="last"><a href="{{route('products.watches')}}">Todos</a></li>
            </ul>
        </nav>

        <nav id="SubNavOuter">
            <span>Tipo</span>
            <ul id="SubNav" class="">
                <li class="active"><a href="{{route('products.category', 1)}}">Deportivo</a></li>
                <li><a href="{{route('products.category', 2)}}">Automático</a></li>
                <li><a href="{{route('products.category', 3)}}">Cronógrafo</a></li>
                <li><a href="{{route('products.category', 4)}}">Buceo</a></li>
                <li><a href="{{route('products.category', 5)}}">Smart</a></li>
                <li><a href="{{route('products.category', 6)}}">Vintage</a></li>
                <li class="last"><a href="{{route('products.watches')}}">Todos</a></li>

            </ul>
        </nav>

        <nav id="GenderOuter">
            <span>Género</span>
            <ul id="Gender" class="">
                <li class="active"><a href="{{route('products.genre', 1)}}">Hombre</a></li>
                <li><a href="{{route('products.genre', 2)}}">Mujer</a></li>
                <li class="last"><a href="{{route('products.watches')}}">Todos</a></li>
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
                        <li><a href="{{route('contact')}}">Contacto</a></li>
                        <li><a href={{route('faq')}}>FAQ</a></li>
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
    <script src="/js/checkEmail.js"></script>
    
    {{-- <script src="/js/register.js"></script> --}}


</body>
</html>
