<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Order Drink Online</title>

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
        <nav class="navbar navbar-expand-md navbar-light bg-danger shadow-sm">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    
                    <div>
                         <h1 class="text-center text-white"> Order Drink Online</h1>
                         <marquee class="text-center text-white" width="100%" direction="left" scrollamount="2" height="25px">
                         By: Raden Haryo Rangga Wijaya - 2301923155</marquee>
                    </div>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        
                    
                    <a class="nav-link text-white" href="/">Home</a>
                     
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Category</a>
                    <ul class="dropdown-menu">
                         <li><a class="dropdown-item" href="/coffeeb">Coffee</a></li>
                         <li><a class="dropdown-item" href="/juiceb">Juice</a></li>
                         <li><a class="dropdown-item" href="/milkshakeb">Milkshake</a></li>
                         <li><a class="dropdown-item" href="/softdrinkb">Soft Drink</a></li>
                    </ul>
                    </li>

                    <a class="nav-link text-white" href="/aboutus">About Us</a><a class="text-danger">_</a>

                    <form class="d-flex">
                        <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light me-3" type="submit">Search</button>
                        </form>

                        <a class="text-danger">_______________________</a>

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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

    <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3 text-white bg-danger">
    &copy; Copyright
    <a class="text-white text-decoration-none">Order Drink Online By: Raden Haryo Rangga Wijaya - 2301923155</a>
  </div>
  <!-- Copyright -->
</footer>

</body>
</html>
