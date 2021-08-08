<div class="left-sidenav">
    <ul class="metismenu left-sidenav-menu">
        <li class="{{ in_array($curr_url, ['dashboard']) ? 'mm-active' : '' }}">
            <a href="{{ route('dashboard') }}" class="{{ in_array($curr_url, ['dashboard']) ? 'active' : '' }}"><i
                    class="fas fa-building"></i><span>Dashboard</span></i></a>
        </li>

        <li class="{{ in_array($curr_url, ['packages.index', 'package_days.index']) ? 'mm-active' : '' }}">
            <a href="javascript: void(0);"
                class="{{ in_array($curr_url, ['packages.index', 'package_days.index']) ? 'active' : '' }}"><i
                    class="ti-bar-chart"></i><span>Main</span><span class="menu-arrow"><i
                        class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item"><a class="nav-link {{ in_array($curr_url, ['packages.index']) ? 'active' : '' }}"
                        href="{{ route('packages.index') }}"><i class="ti-control-record"></i>Package</a></li>
                <li class="nav-item"><a
                        class="nav-link {{ in_array($curr_url, ['package_days.index']) ? 'active' : '' }}"
                        href="{{ route('package_days.index') }}"><i class="ti-control-record"></i>Package Day</a></li>
            </ul>
        </li>

        <li class="{{ in_array($curr_url, ['calendars.index']) ? 'mm-active' : '' }}">
            <a href="{{ route('calendars.index') }}"
                class="{{ in_array($curr_url, ['calendars.index']) ? 'active' : '' }}"><i
                    class="fas fa-calendar-alt"></i><span>Calender</span></i></a>
        </li>

        <li class="{{ in_array($curr_url, ['menus.index', 'menus.create']) ? 'mm-active' : '' }}">
            <a href="{{ route('menus.index') }}"
                class="{{ in_array($curr_url, ['menus.index', 'menus.create']) ? 'active' : '' }}"><i
                    class="far fa-copy"></i><span>Menus</span></i></a>
        </li>

        <li class="{{ request()->is('*/customers*') ? 'mm-active' : '' }}">
            <a href="{{ route('customers.index') }}"
                class="{{ request()->is('*/customers*') ? 'active' : '' }}"><i
                    class="fas fa-diagnoses"></i><span>Customer</span></a>
        </li>

        <li class="{{ request()->is('*/staff*') ? 'mm-active' : '' }}">
            <a href="{{ route('staff.index') }}"
               class="{{ request()->is('*/staff*') ? 'active' : '' }}"><i
                    class="fas fa-user"></i><span>{{__('Staff')}}</span></a>
        </li>

        <li class="{{ request()->is('*/orders*') ? 'mm-active' : '' }}">
            <a href="{{ route('orders.index') }}" class="{{ in_array($curr_url, ['orders.index']) ? 'active' : '' }}"><i
                    class="fas fa-people-carry"></i><span>Order</span></a>
        </li>

        <li class="{{ request()->is('*/disallow*') ? 'mm-active' : '' }}">
            <a href="javascript: void(0);" class="{{ request()->is('*/disallow*') ? 'active' : '' }}"><i
                    class="fas fa-shipping-fast"></i><span>{{__('Master Data')}}</span><span class="menu-arrow"><i
                        class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="{{ request()->is('*/disallow*') ? 'mm-active' : '' }}">
                    <a href="{{ route('disallow.index') }}" class="{{ request()->is('*/disallow*') ? 'active' : '' }}">
                        <i class="fas fa-ban"></i><span>{{__('Disallow')}}</span></a>
                </li>
            </ul>
        </li>

        <li class="{{ in_array($curr_url, ['drivers.index']) ? 'mm-active' : '' }}">
            <a href="javascript: void(0);" class="{{ in_array($curr_url, ['drivers.index']) ? 'active' : '' }}"><i
                    class="fas fa-shipping-fast"></i><span>Delivery</span><span class="menu-arrow"><i
                        class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item"><a class="nav-link {{ in_array($curr_url, ['drivers.index']) ? 'active' : '' }}"
                        href="{{ route('drivers.index') }}"><i class="ti-control-record"></i>Driver</a></li>
                <li class="nav-item"><a class="nav-link {{ in_array($curr_url, ['']) ? 'active' : '' }}" href="#"><i
                            class="ti-control-record"></i>Delivery</a></li>
            </ul>
        </li>
    </ul>
</div>
<!-- end left-sidenav-->
