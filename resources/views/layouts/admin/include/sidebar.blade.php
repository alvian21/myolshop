<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown @yield('dashboard')">
                <a href="{{url('admin/dashboard')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item dropdown @yield('product')">
                <a href="{{route('admin.product')}}" class="nav-link"><i
                        class="fas fa-fire"></i><span>Product</span></a>
            </li>
        </ul>
    </aside>
</div>
