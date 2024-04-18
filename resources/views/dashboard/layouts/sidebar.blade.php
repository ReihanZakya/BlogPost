{{-- SIDEBAR MENYUSUT KALAU GK ADA CONTENT APAPUN --}}
{{-- KELAS ACTIVE TIDAK BERFUNGSI --}}

<div class="d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto" style="min-height: 90vh">
    <div class="navbar-nav">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('/dashboard') ? 'active' : '' }}"
                    href="/dashboard">
                    <svg class="bi">
                        <use xlink:href="#house-fill" />
                    </svg>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('/dashboard/posts*') ? 'active' : '' }}"
                    href="/dashboard/posts">
                    <svg class="bi">
                        <use xlink:href="#file-earmark" />
                    </svg>
                    My Post
                </a>
            </li>
        </ul>
    </div>

    @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>ADMINISTRATOR</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('/dashboard/categories*') ? 'active' : '' }}"
                    href="/dashboard/categories">
                    <svg class="bi">
                        <use xlink:href="#file-earmark" />
                    </svg>
                    Post Categories
                </a>
            </li>
        </ul>
    @endcan

</div>
