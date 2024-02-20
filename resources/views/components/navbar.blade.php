<nav class="navbar navbar-expand-lg bg-primary navbar-dark py-3">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav me-auto">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Pricing</a>
            </div>
            @if (!Auth::check())
                <a href="{{ route('login.index') }}" class="btn btn-info text-white">Login</a>
            @else
                <div class="dropdown">
                    <a class="btn text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ Auth::User()->nama }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('profile.index') }}">Profil</a></li>
                        <li><a class="dropdown-item" href="{{ route('photo.post') }}">Post</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Keluar</a></li>
                    </ul>
                </div>
            @endif
        </div>
    </div>
</nav>
