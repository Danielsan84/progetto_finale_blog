<nav class="navbar navbar-expand-lg fixed-top bg-transparent">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
                @auth
                    <li class="nav-item"><a class="nav-link" href="{{ route('article.create') }}">Create Article</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('careers') }}">Lavora con noi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('article.index') }}">Tuttti gli articoli</a>
                    </li>
                @endauth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>




                {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
          </li> --}}
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Benvenuto {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Profilo di </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            @if(Auth::user()->is_admin)
                                <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            @endif

                            @if(Auth::user()->is_revisor)
                                <li><a class="dropdown-item" href="{{ route('revisor.dashboard') }}">Dashboard del revisore</a></li>
                            @endif

                            @if(Auth::user()->is_writer)
                            <li><a class="dropdown-item" href="{{ route('writer.dashboard') }}">Dashboard del redattore</a></li>
                            @endif 

                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>

                            </li>
                            <form method="POST" action="{{ route('logout') }}" id="form-logout" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endauth
                @guest
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Benvenuto Ospite
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                            <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                        </ul>
                    </li>
                @endguest
            </ul>
            <form class="d-flex" method="GET" action="{{ route('article.search') }}">
                <input class="form-control me-2" type="search" name="query" placeholder="Cosa stai cercando?" aria-label="Search">
                <button class="btn btn-outline-info" type="submit">Cerca</button>
                {{-- <div class="switch">
                    <div class="switch__1">
                        <input id="switch-1" type="checkbox" checked>
                        <label for="switch-1" onclick="toggleDarkMode()"></label>
                    </div>
                </div> --}}
                
                
                
                
            </form>
{{-- <button id="dark-mode-switch" class="btn btn-outline-info" type="submit">Dark-mode</button> --}}
{{-- <button onclick="toggleDarkMode()">Cambia modalità</button> --}}











</nav>
