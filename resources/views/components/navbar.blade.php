<nav class="navbar navbar-expand-lg" id="mainNavbar">
    <a class="navbar-brand" href="#">
        <img src="/assets/Union.png" alt="Logo">
    </a>
    <div class="title-brand"><h3>Meta <span style="font-weight: bold">Blog</span></h3></div>

    <div class="mx-auto navbar-nav">
        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
        <a class="nav-link {{ Request::is('blog') ? 'active' : '' }}" href="{{ url('/blog') }}">Blog</a>
        <a class="nav-link" href="#">Team</a>
    </div>

    <div class="ml-auto navbar-right">
        <!-- Dark Mode Toggle Switch -->
        <button id="darkModeToggle" class="mr-3 btn btn-outline-secondary" style="border: none;">
            <i class="fas fa-moon"></i> Dark Mode
        </button>

        @guest
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> Sign in
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                    <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                </div>
            </div>
        @else
            <div class="dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="px-2 py-1 mr-2 text-white rounded-circle bg-secondary">
                        <i class="fas fa-user"></i>
                    </span>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    @if (Auth::user()->is_admin)
                        <a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a>
                        <div class="dropdown-divider"></div>
                    @endif
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Log Out') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        @endguest
    </div>
</nav>
