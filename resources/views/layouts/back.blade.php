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
    <header class="back-office">
            <div class="search-scart">
                    <div class="search">
                    <form action="{{url('search')}}" method="get">
                             <i class="fas fa-search fa-lg cart"></i>
                             <input class="search-input" type="text" value="" name="searchInput" placeholder="Buscar">
                         </form>
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
        <div class="logo-container">
            <a href="/"><img src="/img/logo.png" alt="logo"></a>
            <h4>RELOJES DE LUJO</h4>
        </div>
    </header>

    @yield('content')

    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
    <script src="/js/deleteConfirm.js"></script>

</body>
</html>

