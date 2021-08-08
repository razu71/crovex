@extends('layouts.app')
@section('header')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#disallow_add_modal">
                        {{__('Create Disallow Item')}}
                    </button>
                </div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Crovex</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Disallow</li>
                </ol>
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
    @include('Pages.Disallow.Components.modal')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">{{__('Disallow Item Info')}}</h4>
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>{{__('Type')}}</th>
                                <th>{{__('Name')}}</th>
                                <th>{{__('Created On')}}</th>
                                <th>{{__('Updated On')}}</th>
                                <th>{{__('Actions')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($disallows[0]))
                            @foreach ($disallows as $item)
                                <tr>
                                    <td>{{ disallow_items($item->type) }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->updated_at }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-dark" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-cog"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item disallow_edit" data-id="{{$item->id}}" data-name="{{$item->name}}" data-type="{{$item->type}}" data-toggle="modal" href="#disallow_add_modal">
                                                    <i class="fas fa-edit sidebaricon"></i>&nbsp;{{__('Edit')}}
                                                </a>
                                                <button class="dropdown-item"
                                                    onclick="delconf('{{ route('disallow.delete', $item->id) }}', 'Do you want to delete this item?','Yes, Delete It','','' ,true)">
                                                    <i class="far fa-trash-alt text-dark"></i>&nbsp;{{__('Delete')}}
                                                </button>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
@push('styles')
    @include('Pages.Customer.Includes.styles')
@endpush
@push('scripts')
    @include('Pages.Customer.Includes.scripts')
    <script>
        $('.disallow_item_create').on('click', function (e) {
            e.preventDefault();
            let form = $(this).parents('form');
            let type = $(form).find('#type').val();
            let name = $(form).find('#name').val();

            if (type.length <= 0){
                $('.type_error').text('Type can not be null');
            }else{
                $('.type_error').text('');
            }

            if (name.length <= 0){
                $('.name_error').text('Name can not be null');
            }else{
                $('.name_error').text('');
            }

            if (name.length > 0 && type.length > 0){
                $(this).html('<i class="fa fa-spinner fa-spin mr-1"></i>');
                $(this).parents('form').submit();
            }
        })

        $(document).on('click','.disallow_edit', function (){
            let id = $(this).data('id');
            let name = $(this).data('name');

            $('#edit_id').val(id);
            $('#type').val(id).attr('selected', true);
            $('#name').val(name);
        })
    </script>
@endpush
