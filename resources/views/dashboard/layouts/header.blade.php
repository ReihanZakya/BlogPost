<header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="/">WPG BLog</a>

    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container d-fled">
            <form class="d-flex me-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown ms-auto">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <a class="nav-link" aria-current="page" href="/">Home <i
                                        class="bi bi-layout-text-sidebar-reverse"></i></a>
                            </li>
                            <li class="dropdown-item">
                                <hr class="dropdown-divider">
                            </li>
                            <li class="dropdown-item">
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="nav-link" aria-current="page" href="/">Logout <i
                                            class="bi bi-box-arrow-right"></i></button type="submit">
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link {{ $active === 'home' ? 'active' : '' }}">Sign in <i
                                class="bi bi-box-arrow-in-right"></i></a>
                    </li>
                @endauth
            </ul>
        </div>
        </div>
    </nav>


    <div id="navbarSearch" class="navbar-search w-100 collapse">
        <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    </div>
</header>
