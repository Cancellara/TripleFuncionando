<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
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
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @admin
                                {{ Auth::user()->name }} (Admin)
                                @else
                                    @shop
                                    {{ Auth::user()->name }} (Shop)
                                    @else
                                        {{ Auth::user()->name }}
                                        @endshop
                                        @endadmin


                                        <span class="caret"></span>
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

    <main class="py-4">
        @yield('content')
    </main>
</div>
<form class="w3-container w3-display-right w3-card-4 w3-padding-16" method="POST" id="payment-form"
      action="">
    <div class="w3-container w3-teal w3-padding-16">Paywith Paypal</div>
    {{ csrf_field() }}
    <h2 class="w3-text-blue">Free</h2>
    <p>Cuenta gratuita</p>
    <label class="w3-text-blue"><b>Precio</b></label>
    <input class="w3-input w3-border" id="amountFree" type="text" name="amountFree" value="1"></p>
    <button class="w3-btn w3-blue">Crear free</button>
</form>

<form class="w3-container w3-display-left w3-card-4 w3-padding-16" method="POST" id="payment-form"
      action="{{ route('payPremium') }}">
    <div class="w3-container w3-teal w3-padding-16">Paywith Paypal</div>
    {{ csrf_field() }}
    <h2 class="w3-text-blue">Premium</h2>
    <p>Cuenta pagando</p>
    <label class="w3-text-blue"><b>Precio</b></label>
    <input class="w3-input w3-border" id="amountPremium" type="text" name="amountPremium" value="1"></p>
    <button class="w3-btn w3-blue">Crear premium</button>
</form>
</body>
</html>