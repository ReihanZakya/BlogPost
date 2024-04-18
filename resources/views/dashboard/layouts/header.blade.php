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
                    <li class="dropdown-item">
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="nav-link text-danger" aria-current="page" href="/">Logout <i
                                    class="bi bi-box-arrow-right"></i></button type="submit">
                        </form>
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
