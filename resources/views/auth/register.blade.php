@extends('layouts.guest')
@section('content')
    <div class="auth-page">
        <div class="card auth-card shadow-lg">
            <div class="card-body">
                <div class="px-3">
                    <div class="auth-logo-box">
                        <a href="../dashboard/analytics-index.html" class="logo logo-admin"><img
                                src="{{ asset('assets/images/logo-sm.png') }}" height="55" alt="logo"
                                class="auth-logo"></a>
                    </div>
                    <!--end auth-logo-box-->

                    <div class="text-center auth-logo-text">
                        <h4 class="mt-0 mb-3 mt-5">Free Register for Crovex</h4>
                        <p class="text-muted mb-0">Get your free Crovex account now.</p>
                    </div>
                    <!--end auth-logo-text-->


                    <form class="form-horizontal auth-form my-4" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="username">Username</label>
                            <div class="input-group mb-3">
                                <span class="auth-form-icon">
                                    <i class="dripicons-user"></i>
                                </span>
                                <input type="text" class="form-control" id="username" name="name"
                                    placeholder="Enter username">
                            </div>
                        </div>
                        <!--end form-group-->

                        <div class="form-group">
                            <label for="useremail">Email</label>
                            <div class="input-group mb-3">
                                <span class="auth-form-icon">
                                    <i class="dripicons-mail"></i>
                                </span>
                                <input type="email" class="form-control" id="useremail" name="email"
                                    placeholder="Enter Email">
                            </div>
                        </div>
                        <!--end form-group-->

                        <div class="form-group">
                            <label for="userpassword">Password</label>
                            <div class="input-group mb-3">
                                <span class="auth-form-icon">
                                    <i class="dripicons-lock"></i>
                                </span>
                                <input type="password" class="form-control" id="userpassword" name="password"
                                    placeholder="Enter password">
                            </div>
                        </div>
                        <!--end form-group-->

                        <div class="form-group">
                            <label for="conf_password">Confirm Password</label>
                            <div class="input-group mb-3">
                                <span class="auth-form-icon">
                                    <i class="dripicons-lock-open"></i>
                                </span>
                                <input type="password" class="form-control" id="conf_password"
                                    placeholder="Enter Confirm Password">
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--end form-group-->

                        <div class="form-group row mt-4">
                            <div class="col-sm-12">
                                <div class="custom-control custom-switch switch-success">
                                    <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                                    <label class="custom-control-label text-muted" for="customSwitchSuccess">By registering
                                        you agree to the Frogetor <a href="#" class="text-primary">Terms of Use</a></label>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end form-group-->

                        {{-- <div class="form-group mb-0 row"> --}}
                        <div class="col-12 mt-2">
                            <button class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light"
                                type="submit">Register <i class="fas fa-sign-in-alt ml-1"></i></button>
                        </div>
                        <!--end col-->
                        {{-- </div> --}}
                        <!--end form-group-->
                    </form>
                    <!--end form-->
                </div>
                <!--end /div-->

                <div class="m-3 text-center text-muted">
                    <p class="">Already have an account ? <a href="{{ route('login') }}" class="text-primary ml-2">Log
                            in</a></p>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
@endsection
