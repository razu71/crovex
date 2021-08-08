@extends('layouts.app')
@section('header')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
                        Create Package Day
                    </button>
                </div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Crovex</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Package Day</li>
                </ol>
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
    @include('Pages.Package.Day.Components.modal')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Package Day Info</h4>
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Package Day QTY</th>
                                <th>Created On</th>
                                <th>Updated On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($package_days as $item)
                                <tr>
                                    <td> {{ $item->id }} </td>
                                    <td> {{ $item->no_day }} </td>
                                    <td> {{ $item->created_at }} </td>
                                    <td> {{ $item->updated_at }} </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-dark" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-cog"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">
                                                    <i class="fas fa-edit sidebaricon"></i>&nbsp;Edit
                                                </a>
                                                <button class="dropdown-item"
                                                    onclick="delconf('{{ route('package_days.delete', $item->id) }}', 'Do you want to delete this Package Day?')">
                                                    <i class="far fa-trash-alt text-dark"></i>&nbsp;Delete
                                                </button>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
@push('styles')
    @include('Pages.Package.Includes.styles')
@endpush
@push('scripts')
    @include('Pages.Package.Includes.scripts')
@endpush
