<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}"> <img alt="image" src="/admin/assets/img/logo.png"
                    class="header-logo" /> <span class="logo-name">Otika</span>
            </a>
        </div>
        <ul class="sidebar-menu">

            <li class="dropdown @yield('dashboard')">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            <li class="dropdown @yield('infos')">
                <a href="{{ route('admin.infos.index') }}"><i data-feather="briefcase"></i><span>Info</span></a>
            </li>

            <li class="dropdown">
                <a href="#"><i></i><span></span></a>
            </li>

            <li class="dropdown @yield('humans')">
                <a href="{{ route('admin.humans.index') }}"><i data-feather="briefcase"></i><span>Odamlar</span></a>
            </li>

            <li class="dropdown @yield('numbers')">
                <a href="{{ route('admin.numbers.index') }}"><i data-feather="briefcase"></i><span>Nomerlar</span></a>
            </li>

            <li class="dropdown @yield('categories')">
                <a href="{{ route('admin.categories.index') }}"><i
                        data-feather="briefcase"></i><span>Category</span></a>
            </li>

            <li class="dropdown @yield('posts')">
                <a href="{{ route('admin.posts.index') }}"><i data-feather="briefcase"></i><span>Posts</span></a>
            </li>

            <li class="dropdown">
                <a href="#"><i></i><span></span></a>
            </li>

            <li class="dropdown @yield('regions')">
                <a href="{{ route('admin.regions.index') }}"><i data-feather="briefcase"></i><span>Viloyat</span></a>
            </li>

            <li class="dropdown @yield('districts')">
                <a href="{{ route('admin.districts.index') }}"><i data-feather="briefcase"></i><span>Tuman</span></a>
            </li>

            <li class="dropdown @yield('streets')">
                <a href="{{ route('admin.streets.index') }}"><i data-feather="briefcase"></i><span>Mahalla</span></a>
            </li>

        </ul>
    </aside>
</div>
