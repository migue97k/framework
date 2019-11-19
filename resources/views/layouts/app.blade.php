<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                        @if(Auth::user()->admi)
                            <li class="nav-item dropdown">
                                    <a id="navbarDropdown" role="button" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Panel de control
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="{{ route('Clientes') }}">Clientes</a>
                                        <a class="dropdown-item" href="{{ route('Productoslist') }}">Productos</a>
                                        <a class="dropdown-item" href="{{ route('AdminPanel') }}">Categorias</a>
                                    </div>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                    <a id="navbarDropdown" role="button" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        configuracion
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="{{ route('agregarproducto') }}">Agregar producto</a>
                                        <a class="dropdown-item" href="{{ route('Productoslist') }}">Productos</a>
                                        <a class="dropdown-item" href="{{ route('indexventas') }}">Comprado</a>
                                         <a class="dropdown-item" href="{{ route('AdminPanel') }}">pagos</a>
                                    </div>
                            </li>

                        @endif

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
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

        <main class="py-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3">
                        <div class="btn-group-vertical">
                            <a href="{{route('alimentosybebidas')}}" class="btn btn-outline-secondary" id="btnMenu">Alimentos y Bebidas</a>
                            <a href="{{route('bebes')}}" class="btn btn-outline-secondary" id="btnMenu">Bebés</a>
                            <a href="{{route('celularesytelefonia')}}" class="btn btn-outline-secondary" id="btnMenu">Celulares y Telefonía</a>
                            <a href="{{route('consolasyvideojuegos')}}" class="btn btn-outline-secondary" id="btnMenu">Consolas y Videojuego</a>
                            <a href="{{route('computacion')}}" class="btn btn-outline-secondary" id="btnMenu">Computación</a>
                            <a href="{{route('electrodomestico')}}" class="btn btn-outline-secondary" id="btnMenu">Electrodomésticos</a>
                            <a href="{{route('hogarmueblesjardin')}}" class="btn btn-outline-secondary" id="btnMenu">Hogar, Muebles y Jardín</a>
                            <a href="{{route('juegosyjuguetes')}}" class="btn btn-outline-secondary" id="btnMenu">Juegos y Juguetes</a>
                            <a href="{{route('ropabolsascalzado')}}" class="btn btn-outline-secondary" id="btnMenu">Ropa, Bolsas y Calzado</a>
                        </div>
                    </div>
                    <div class="col-9">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
