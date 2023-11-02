<header>
    <div class="bar bg-primary py-2">
        <div class="container d-flex justify-content-end text-white text-uppercase gap-4">
            <div>dc power<span>&trade;<span>visa</span>&reg;</span></div>
            <div>additional dc sites <span>&#9660;</span></div>
        </div>
    </div>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img class="h-50" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase {{ Route::currentRouteName() === 'home' ? 'active' : '' }}"
                            href="{{ route('home') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#">CHARACTERS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase {{ Route::currentRouteName() === 'comics' ? 'active' : '' }}"
                            href="{{ route('comics') }}">COMICS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#">MOVIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#">TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#">GAMES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#">COLLECTIBLES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#">VIDEOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#">FAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#">NEWS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-uppercase dropdown-toggle" href="#" id="dropdownId"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SHOP</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
