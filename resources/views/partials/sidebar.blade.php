<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DANI</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <!-- <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div> -->
            <div class="ms-3">
                <h6 class="mb-0">{{ strtoupper(auth()->user()->name) }}</h6>
                <span>Admin</span>
            </div>
        </div>
        {{-- <div class="navbar-nav w-100">
            <a href="{{route('home_page')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{route('get_form')}}" class="nav-item nav-link active"><i class="fa fa-users me-2"></i>Customer</a>
            <a href="{{route('get_nbd_customers')}}" class="nav-item nav-link active"><i class="fa fa-table me-2"></i>NBD</a>
            <a href="{{route('get_mashriq_customers')}}" class="nav-item nav-link active"><i class="fa fa-chart-bar me-2"></i>Mashriq</a>
            <a href="{{route('get_dubai_islamic_customers')}}" class="nav-item nav-link active"><i class="fa fa-chart-bar text-nowrap  "></i>Dubai Islamic Bank</a>
        </div> --}}
        <div class="navbar-nav w-100">
            <a href="{{ route('home_page') }}"
                class="nav-item nav-link {{ request()->routeIs('home_page') ? 'active' : '' }}">
                <i class="fa fa-tachometer-alt me-2"></i>Dashboard
            </a>
            <a href="{{ route('get_form') }}"
                class="nav-item nav-link {{ request()->routeIs('get_form') ? 'active' : '' }}">
                <i class="fa fa-users me-2"></i>Customers
            </a>
            <a href="{{ route('get_nbd_customers') }}"
                class="nav-item nav-link {{ request()->routeIs('get_nbd_customers') ? 'active' : '' }}">
                <i class="fa fa-table me-2"></i>NBD
            </a>
            <a href="{{ route('get_mashriq_customers') }}"
                class="nav-item nav-link {{ request()->routeIs('get_mashriq_customers') ? 'active' : '' }}">
                <i class="fa fa-chart-bar me-2"></i>Mashriq
            </a>
            <a href="{{ route('get_dubai_islamic_customers') }}"
                class="nav-item nav-link {{ request()->routeIs('get_dubai_islamic_customers') ? 'active' : '' }}">
                <i class="fa fa-building text-nowrap"></i>Dubai Islamic Bank
            </a>
        </div>

    </nav>
</div>
<!-- Sidebar End -->
