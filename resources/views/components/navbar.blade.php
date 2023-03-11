<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand home-icon" href="{{ route('welcome') }}">
            <span class="fa-sharp fa-solid fa-house-chimney text-info"></span>
            {{-- {{ config('app.name', 'Aulab_Post') }} --}}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto navbar-left">
                @auth
                    <li class="nav-item mx-3">
                        <a href="{{ route('article.create') }}" class="nav-link">Crear artículo</a>
                    </li>
                @endauth

                    <li class="nav-item mx-3">
                        <a href="{{ route('careers') }}" class="nav-link">Trabaja con nosotros</a>
                    </li>

                @auth
                    <div class="dropdown">
                        <a class=" nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dashboard
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            @if (Auth::user()->is_admin)
                                <li class="nav-item mx-3">
                                    <a href="{{ route('admin.dashboard') }}" class="dropdown-item">Admin</a>
                                </li>
                            @endif 
                            @if(Auth::user()->is_revisor)
                                <li class="nav-item mx-3">
                                    <a href="{{ route('revisor.dashboard') }}" class="dropdown-item">Revisor</a>
                                </li>
                            @endif
                            @if(Auth::user()->is_writer)
                                <li class="nav-item mx-3">
                                    <a href="{{ route('writer.dashboard') }}" class="dropdown-item">Redactor</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                @endauth

            </ul> 
            <!-- Right Side Of Navbar -->
            <div class="w-50 search-container">
                <ul class="navbar-nav w-100 d-flex justify-content-end">

                    <!-- Buscador -->
                    <form action="{{ route('article.search') }}" method="GET" class="d-flex me-4 ">
                        <input type="search" name="query" placeholder="Que estas buscando?" class="form-control me-2 my-search" aria-label="Search">
                        <button class="btn btn-outline-info rounded-circle" type="submit"><span class="fa-solid fa-magnifying-glass"></span></button>
                    </form>

                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
    </div>
</nav>
