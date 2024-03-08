<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-hat-cowboy"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Kelompok <sup>10</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
        </a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ request()->routeIs('cake.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('cake.index') }}">
            <i class="fas fa-fw fa-birthday-cake"></i>
            <span>Data Kue</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
