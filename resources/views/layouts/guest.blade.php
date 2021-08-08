<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Crovex - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Css includes -->
    @include('Includes.styles')
</head>

<body class="account-body accountbg">
    <div class="container">
        <div class="row vh-100 ">
            <div class="col-12 align-self-center">
                <!-- yield content-->
                @yield('content')
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    @include('Includes.scripts')
</body>

</html>
