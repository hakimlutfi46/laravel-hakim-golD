<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <div class="sidebar">


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="/user" class="nav-link {{ request()->is('user*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-download"></i>
                        <p>
                            CRUD
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tugas') }}" class="nav-link {{ request()->is('tugas*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Parsing Data
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
