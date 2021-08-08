<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Crovex - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- styles includes -->
    @include('Includes.styles')
    @php
        $curr_url = Route::currentRouteName();
    @endphp
</head>

<body>
    <div class="topbar">
        <!-- topbar includes -->
        @include('Includes.topbar')
        <!-- Navbar includes -->
        @include('Includes.navbar')
    </div>
    <!-- model includes -->
    @include('Includes.modal')
    <!-- sidebar includes -->
    @include('Includes.sidebar')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="container-fluid">
                <!-- yield content -->
                @yield('header')
                @yield('content')
            </div>
            @include('Includes.footer')
        </div>
    </div>
    <!-- jQuery includes -->
    @include('Includes.scripts')
</body>

</html>
