<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Welcome {{ Auth::user()->role }}</span>
    </a>

    <div class="sidebar">


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                @if (auth()->user()->role == 'admin')
                    <li class="nav-item">
                        <a href="/admin" class="nav-link {{ request()->is('admin*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-download"></i>
                            <p>
                                CRUD
                            </p>
                        </a>
                    </li>
                @endif

                @if (auth()->user()->role == 'user')
                    <li class="nav-item">
                        <a href="{{ route('user') }}" class="nav-link {{ request()->is('user*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Welcome Page
                            </p>
                        </a>
                    </li>
                @endif

                @if (auth()->user()->role == 'admin')
                    <li class="nav-item">
                        <a href="{{ route('tugas') }}" class="nav-link {{ request()->is('tugas*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-database"></i>
                            <p>
                                Parsing Data
                            </p>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</aside>
