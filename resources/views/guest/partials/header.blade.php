<header id="guest-header">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('comics.home')}}">
                <div class="dc-logo">
                    <img src="{{ Vite::asset('resources/assets/images/dc-logo-bg.png') }}" alt="DC logo">
                </div>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">
                            Characters
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Comics
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Movies
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Tv
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Games
                        </a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>
</header>