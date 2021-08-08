@extends('layouts.app')
@section('header')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Crovex</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Up Comming</li>
                    </ol>
                </div>
                <h4 class="page-title">Up Comming Order</h4>
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="pricingTable1 text-center">
                        <img src="{{ asset('assets/images/widgets/p-1.svg') }}" alt="" class="" height="100">
                        <h6 class="title1 py-3 mt-2 mb-0">Basic plan <small class="text-muted">Per Month</small></h6>
                        <ul class="list-unstyled pricing-content-2 pb-3">
                            <li>30GB Disk Space</li>
                            <li>30 Email Accounts</li>
                            <li>30GB Monthly Bandwidth</li>
                            <li>06 Subdomains</li>
                            <li>10 Domains</li>
                        </ul>
                        <a href="#" class="pricingTable-signup mt-3">sign up</a>
                    </div>
                    <!--end pricingTable-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->

        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="pricingTable1 text-center">
                        <span class="badge badge-warning ml-auto a-animate-blink">POPULAR</span>
                        <img src="{{ asset('assets/images/widgets/p-2.svg') }}" alt="" class="d-block mx-auto"
                            height="100">

                        <h6 class="title1 py-3 mt-2 mb-0">Premium plan <small class="text-muted">Per Month</small></h6>
                        <ul class="list-unstyled pricing-content-2 pb-3">
                            <li>50GB Disk Space</li>
                            <li>50 Email Accounts</li>
                            <li>50GB Monthly Bandwidth</li>
                            <li>10 Subdomains</li>
                            <li>15 Domains</li>
                        </ul>
                        <a href="#" class="pricingTable-signup mt-3">sign up</a>
                    </div>
                    <!--end pricingTable1-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->

        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="pricingTable1 text-center">
                        <img src="{{ asset('assets/images/widgets/p-5.svg') }}" alt="" class="" height="100">
                        <h6 class="title1 py-3 mt-2 mb-0">Plus plan <small class="text-muted">Per Month</small></h6>
                        <ul class="list-unstyled pricing-content-2 pb-3">
                            <li>80GB Disk Space</li>
                            <li>80 Email Accounts</li>
                            <li>80GB Monthly Bandwidth</li>
                            <li>15 Subdomains</li>
                            <li>20 Domains</li>
                        </ul>
                        <a href="#" class="pricingTable-signup mt-3">sign up</a>
                    </div>
                    <!--end pricingTable1-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->

        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="pricingTable1 text-center">
                        <img src="{{ asset('assets/images/widgets/p-6.svg') }}" alt="" class="" height="100">
                        <h6 class="title1 py-3 mt-2 mb-0">Master plan <small class="text-muted">Per year</small></h6>
                        <ul class="list-unstyled pricing-content-2 pb-3">
                            <li>180GB Disk Space</li>
                            <li>180 Email Accounts</li>
                            <li>180GB Yearly Bandwidth</li>
                            <li>50 Subdomains</li>
                            <li>40 Domains</li>
                        </ul>
                        <a href="#" class="pricingTable-signup mt-3">sign up</a>
                    </div>
                    <!--end pricingTable1-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->
@endsection
