@extends('layouts.app')
@section('header')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                </div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Crovex</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Order</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 py-4">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row justify-content-center">

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for=""><b>Title<sup class="text-danger">*</sup></b> </label>
                                            <input id="inp_name" class="form-control get-title" type="text" name="name"
                                                placeholder="Enter Food Name">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="intro"><b>Ingredients<sup class="text-danger">*</sup></b></label>
                                            <textarea id="ingredients" placeholder="Ingredients" class="form-control"
                                                name="ingredient" rows="3"></textarea>
                                            <span class="text-danger error " id="descriptionMsg"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <h6 class="text-center">
                                                <span id="destination-form-span"></span>
                                                <button id="submit-btn" type="submit" class="btn btn-primary ">
                                                    {{__('Create Order')}}
                                                </button>
                                            </h6>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            CKEDITOR.replace('ingredients');
        });

        $(document).ready(function() {
            $('.select2').select2({
                placeholder: 'Select'
            });

            $(".flatpickr").flatpickr();
        });
    </script>
@endpush
