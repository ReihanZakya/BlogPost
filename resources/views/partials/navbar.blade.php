<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="/">WPU BLOG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ $active === 'about' ? 'active' : '' }}" href="/about">About</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}" href="/categories">Categories</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ $active === 'products' ? 'active' : '' }}" href="/products">Products</a>
                </li> --}}
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown ms-auto">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <a class="nav-link" aria-current="page" href="/dashboard">My dashboard <i
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
