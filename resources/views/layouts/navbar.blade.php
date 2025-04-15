<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">E-BizMart</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarEbizmart" aria-controls="navbarEbizmart" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarEbizmart">
            <ul class="navbar-nav ml-auto">
                {{-- Menu untuk semua orang --}}
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item {{ Request::is('produk') ? 'active' : '' }}">
                    <a class="nav-link" href="#">Produk</a>
                </li>
                <li class="nav-item {{ Request::is('tentang') ? 'active' : '' }}">
                    <a class="nav-link" href="#">Tentang</a>
                </li>

                {{-- Jika user sudah login --}}
                @auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" class="rounded-circle mr-2" width="30" height="30">
                            <strong class="text-light">{{ Auth::user()->name }}</strong>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">Profil</a>

                            <div class="dropdown-divider"></div>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item" type="submit">Logout</button>
                            </form>
                        </div>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>