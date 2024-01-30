<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('dashboard-general-dashboard') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
                    </li>
                    <li class="{{ request()->is('dashboard-ecommerce-dashboard') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('dashboard-ecommerce-dashboard') }}">Ecommerce Dashboard</a>
                    </li>
                </ul>
            </li>
            @if(auth()->user()->role == 'writer')
            <li class="nav-item {{ request()->routeIs('article.index') ? 'active' : '' }}">
                <a href="{{ route('article.index') }}" class="nav-link"><i class="fas fa-file-text"></i><span>My Posts</span></a>
            </li>
            <li class="nav-item {{ request()->routeIs('categories-post.index') ? 'active' : '' }}">
                <a href="{{ route('categories-post.index') }}" class="nav-link"><i class="fas fa-th-large"></i><span>Post Categories</span></a>
            </li>
            @endif
            @if(auth()->user()->role == 'admin' && 'superadmin')
            <li class="nav-item {{ request()->routeIs('user.index') ? 'active' : '' }}">
                <a href="{{ route('user.index') }}" class="nav-link"><i class="fas fa-users"></i><span>User List</span></a>
            </li>
            @endif
        </ul>
    </aside>
</div>
