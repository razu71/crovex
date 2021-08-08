@extends('layouts.app')
@section('header')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Crovex</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">CRM</li>
                </ol>
            </div>
            <h4 class="page-title">CRM</h4>
        </div><!--end page-title-box-->
    </div><!--end col-->
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-xl-3">
        
        <div class="card">
            <div class="card-body">
                <div class=" d-flex justify-content-between">
                    <img src="{{ asset('assets/images/widgets/monthly-re.png') }}" alt="" height="75">
                    <div class="align-self-center">
                        <h2 class="mt-0 mb-2 font-weight-semibold">$0<span class="badge badge-soft-success font-11 ml-2"><i class="fas fa-arrow-up"></i> 8.6%</span></h2>
                        <h4 class="title-text mb-0">Monthly Revenue</h4>
                    </div>
                </div>
                <div class="d-flex justify-content-between bg-purple p-3 mt-3 rounded">
                    <div>
                        <h4 class="mb-1 font-weight-semibold text-white font-20">$0</h4>
                        <p class="text-white mb-0">Card Balance</p>
                    </div>
                </div>                                    
            </div><!--end card-body-->
        </div><!--end card-->                          
    </div><!-- end col-->
    <div class="col-xl-9">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <img src="{{ asset('assets/images/users/user-1.png') }}" alt="" class="thumb-md rounded-circle mr-2">                                       
                    <div class="media-body align-self-center">
                        <h4 class="mt-0 mb-1">Welcome back, Lucy Peterson</h4>
                        <p class="text-muted mb-0 font-14 pr-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div><!--end media-body-->
                </div><!--end media-->
                <div class="welcome-img">
                    <img src="{{ asset('assets/images/widgets/w-2.svg') }}" alt="" height="120" class="mt-n4 mr-5 d-none d-lg-block">    
                </div>                                       
            </div><!--end card-body--> 
        </div><!--end card-->
        <div class="row">
            <div class="col-sm-3">
                <div class="card crm-data-card">
                    <div class="card-body"> 
                        <div class="row">
                            <div class="col-4 align-self-center">
                                <div class="icon-info">
                                    <i class="far fa-smile rounded-circle bg-soft-success"></i>
                                </div>
                            </div><!-- end col-->
                            <div class="col-8 text-right">
                                <p class="text-muted font-14">Customers</p>
                                <h3 class="mb-0">0</h3>
                            </div><!-- end col-->
                        </div><!-- end row-->                                                                                  
                    </div><!--end card-body--> 
                </div><!--end card-->
            </div><!--end col-->
            <div class="col-sm-3">
                <div class="card crm-data-card">
                    <div class="card-body"> 
                        <div class="row">
                            <div class="col-4 align-self-center">
                                <div class="icon-info">
                                    <i class="far fa-user rounded-circle bg-soft-pink"></i>
                                </div>
                            </div><!-- end col-->
                            <div class="col-8 text-right">
                                <p class="text-muted font-14">Manus</p>
                                <h3 class="mb-0">0</h3>                                            
                            </div><!-- end col-->
                        </div><!-- end row-->
                    </div><!--end card-body--> 
                </div><!--end card-->
            </div><!--end col-->
            <div class="col-sm-3">
                <div class="card crm-data-card">
                    <div class="card-body"> 
                        <div class="row">
                            <div class="col-4 align-self-center">
                                <div class="icon-info">
                                    <i class="far fa-handshake rounded-circle bg-soft-purple"></i>
                                </div>
                            </div><!-- end col-->
                            <div class="col-8 text-right">
                                <p class="text-muted font-14">Staff Dealers</p>
                                <h3 class="mb-0">0</h3>                                            
                            </div><!-- end col-->
                        </div><!-- end row-->                                                                                     
                    </div><!--end card-body--> 
                </div><!--end card--> 
            </div><!--end col-->
            <div class="col-sm-3">
                <div class="card crm-data-card">                                        
                    <div class="card-body"> 
                        <div class="row">
                            <div class="col-4 align-self-center">
                                <div class="icon-info">
                                    <i class="far fa-registered rounded-circle bg-soft-warning"></i>
                                </div>
                            </div><!-- end col-->
                            <div class="col-8 text-right">
                                <p class="text-muted font-14">Orders</p>
                                <h3 class="mb-0">0</h3>
                                
                            </div><!-- end col-->
                        </div><!-- end row-->
                    </div><!--end card-body--> 
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!-- end col-->
</div><!--end row-->
@endsection