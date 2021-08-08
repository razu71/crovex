@extends('layouts.app')
@push('styles')
    @include('Pages.Customer.Includes.styles')
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
@endpush

@section('header')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                </div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Crovex</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Customer</a></li>
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
                <div class="col-lg-12 py-4">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row justify-content-center">

                                    <input type="hidden" name="edit_id" value="@if(!empty($customer)) {{$customer->id}} @endif">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name"><b>{{__('Customer Name')}}<sup class="text-danger">*</sup></b> </label>
                                            <input id="name" class="form-control" type="text" name="name" @if(!empty($customer)) value="{{$customer->name}}" @elseif(!empty(old('name'))) value="{{old('name')}}" @else placeholder="Enter Customer Name" @endif >
                                            <span class="text-danger error ">{{$errors->first('name')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact"><b>{{__('Contact Number')}}<sup class="text-danger">*</sup></b> </label>
                                            <input id="contact" class="form-control" type="number" name="contact" @if(!empty($customer)) value="{{$customer->contact}}" @elseif(!empty(old('contact'))) value="{{old('contact')}}" @else placeholder="Enter Contact Number" @endif >
                                            <span class="text-danger error ">{{$errors->first('contact')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="package_type_id"><b>{{__('Select Package Type')}}<sup class="text-danger">*</sup></b> </label>
                                            <select class="form-control" name="package_type_id" id="package_type_id">
                                                <option value="">{{__('Select')}}</option>
                                                @if(isset($package_types[0]))
                                                    @foreach($package_types as $package_type)
                                                        <option @if(!empty($customer)) value="{{$customer->package_type_id}}" selected @elseif(!empty(old('package_type_id'))) value="{{old('package_type_id')}}" selected @else value="{{$package_type->id}}" @endif >{{$package_type->name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <span class="text-danger error ">{{$errors->first('package_type_id')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="package_day_id"><b>{{__('Select Package Day')}}<sup class="text-danger">*</sup></b> </label>
                                            <select class="form-control package_day_id" name="package_day_id" id="package_day_id">
                                                <option value="">{{__('Select')}}</option>
                                                @if(isset($package_days[0]))
                                                    @foreach($package_days as $package_day)
                                                        <option @if(!empty($customer)) value="{{$customer->package_day_id}}" selected @elseif(!empty(old('package_day_id'))) value="{{old('package_day_id')}}" selected @else value="{{$package_day->id}}" @endif data-day="{{$package_day->no_day}}">{{$package_day->no_day}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <span class="text-danger error ">{{$errors->first('package_day_id')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="meal_time"><b>{{__('Choose Meal Time')}}<sup class="text-danger">*</sup></b> </label>
                                            <select class="form-control" name="meal_time" id="meal_time">
                                                <option value="">{{__('Select')}}</option>
                                                @foreach(meal_times() as $key => $value)
                                                    <option @if(!empty($customer)) value="{{$customer->meal_time}}" selected @elseif(!empty(old('meal_time'))) value="{{old('meal_time')}}" selected @else value="{{$key}}" @endif >{{$value}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger error ">{{$errors->first('meal_time')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="pax"><b>{{__('Choose Pax')}}<sup class="text-danger">*</sup></b> </label>
                                            <select class="form-control" name="pax" id="pax">
                                                <option value="">{{__('Select')}}</option>
                                                @foreach(choose_pax() as $key => $value)
                                                    <option @if(!empty($customer)) value="{{$customer->pax}}" selected @elseif(!empty(old('pax'))) value="{{old('pax')}}" selected @else value="{{$key}}" @endif >{{$value}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger error ">{{$errors->first('pax')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="receiver_name"><b>{{__('Receiver Name')}}<sup class="text-danger">*</sup></b> </label>
                                            <input id="receiver_name" class="form-control" type="text" name="receiver_name" @if(!empty($customer)) value="{{$customer->receiver_name}}" @elseif(!empty(old('receiver_name'))) value="{{old('receiver_name')}}" @else placeholder="Enter Receiver Name" @endif >
                                            <span class="text-danger error ">{{$errors->first('receiver_name')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="receiver_contact"><b>{{__('Receiver Contact')}}<sup class="text-danger">*</sup></b> </label>
                                            <input id="receiver_contact" class="form-control" type="number" name="receiver_contact" @if(!empty($customer)) value="{{$customer->receiver_contact}}" @elseif(!empty(old('receiver_contact'))) value="{{old('receiver_contact')}}" @else  placeholder="Enter Receiver Contact" @endif >
                                            <span class="text-danger error ">{{$errors->first('receiver_contact')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="unit_number"><b>{{__('Unit Number')}}<sup class="text-danger">*</sup></b> </label>
                                            <input id="unit_number" class="form-control" type="text" name="unit_number" @if(!empty($customer)) value="{{$customer->unit_number}}" @elseif(!empty(old('unit_number'))) value="{{old('unit_number')}}" @else  placeholder="Enter Unit Number" @endif>
                                            <span class="text-danger error ">{{$errors->first('unit_number')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="building_name"><b>{{__('Building Name')}}</b> </label>
                                            <input id="building_name" class="form-control" type="text" name="building_name" @if(!empty($customer)) value="{{$customer->building_name}}" @elseif(!empty(old('building_name'))) value="{{old('building_name')}}" @else placeholder="Enter Building Name" @endif >
                                            <span class="text-danger error ">{{$errors->first('building_name')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="road"><b>{{__('Road')}}</b> </label>
                                            <input id="road" class="form-control" type="text" name="road" @if(!empty($customer)) value="{{$customer->road}}" @elseif(!empty(old('road'))) value="{{old('road')}}" @else placeholder="Enter Road" @endif >
                                            <span class="text-danger error ">{{$errors->first('road')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="city"><b>{{__('City')}}</b> </label>
                                            <input id="city" class="form-control" type="text" name="city" @if(!empty($customer)) value="{{$customer->city}}" @elseif(!empty(old('city'))) value="{{old('city')}}" @else  placeholder="Enter City" @endif >
                                            <span class="text-danger error ">{{$errors->first('city')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="postcode"><b>{{__('Postcode')}}</b> </label>
                                            <input id="postcode" class="form-control" type="number" name="postcode" @if(!empty($customer)) value="{{$customer->postcode}}" @elseif(!empty(old('postcode'))) value="{{old('postcode')}}" @else  placeholder="Enter Postcode" @endif>
                                            <span class="text-danger error ">{{$errors->first('postcode')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="state"><b>{{__('State')}}</b> </label>
                                            <input id="state" class="form-control" type="text" name="state" @if(!empty($customer)) value="{{$customer->state}}" @elseif(!empty(old('state'))) value="{{old('state')}}" @else  placeholder="Enter State" @endif>
                                            <span class="text-danger error ">{{$errors->first('state')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="meal_package"><b>{{__('Select Meal Package')}}<sup class="text-danger">*</sup></b> </label>
                                            <select class="form-control" name="meal_package" id="meal_package">
                                                <option value="">{{__('Select')}}</option>
                                                @foreach(meal_packages() as $key => $value)
                                                    <option @if(!empty($customer)) value="{{$customer->meal_package}}" selected @elseif(!empty(old('meal_package'))) value="{{old('meal_package')}}" selected @else value="{{$key}}" @endif >{{$value}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger error ">{{$errors->first('meal_package')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="soup_package"><b>{{__('Select Soup Package')}}<sup class="text-danger">*</sup></b> </label>
                                            <select class="form-control" name="soup_package" id="soup_package">
                                                <option value="">{{__('Select')}}</option>
                                                @foreach(soup_packages() as $key => $value)
                                                    <option @if(!empty($customer)) value="{{$customer->soup_package}}" selected @elseif(!empty(old('soup_package'))) value="{{old('soup_package')}}" selected @else value="{{$key}}" @endif >{{$value}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger error ">{{$errors->first('soup_package')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="soup"><b>{{__('Select Soup')}}<sup class="text-danger">*</sup></b> </label>
                                            <select class="form-control" name="soup" id="soup">
                                                <option value="">{{__('Select')}}</option>
                                                @foreach(soup() as $key => $value)
                                                    <option @if(!empty($customer)) value="{{$customer->soup}}" selected @elseif(!empty(old('soup'))) value="{{old('soup')}}" selected @else value="{{$key}}" @endif>{{$value}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger error ">{{$errors->first('soup')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="rice"><b>{{__('Select Rice')}}<sup class="text-danger">*</sup></b> </label>
                                            <select class="form-control" name="rice" id="rice">
                                                <option value="">{{__('Select')}}</option>
                                                @foreach(rice() as $key => $value)
                                                    <option @if(!empty($customer)) value="{{$customer->rice}}" selected @elseif(!empty(old('rice'))) value="{{old('rice')}}" selected @else value="{{$key}}" @endif >{{$value}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger error ">{{$errors->first('rice')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="disallowed_1"><b>{{__('Disallowed 1')}}<sup class="text-danger">*</sup></b> </label>
                                            <select class="form-control select2" name="disallowed_1[]" multiple="multiple" id="disallowed_1">
                                                <option value="">{{__('Select')}}</option>
                                                @if(isset($disallows[0]))
                                                    @foreach($disallows as $disallow)
                                                        @if($disallow->type === DISALLOW_ONE)
                                                            <option value="{{$disallow->type}}">{{$disallow->name}}</option>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </select>
                                            <span class="text-danger error ">{{$errors->first('disallowed_1')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for=""><b>{{__('Disallowed 2')}}<sup class="text-danger">*</sup></b> </label>
                                            <select class="form-control select2" name="disallowed_2[]" multiple="multiple">
                                                <option value="">{{__('Select')}}</option>
                                                @if(isset($disallows[0]))
                                                    @foreach($disallows as $disallow)
                                                        @if($disallow->type === DISALLOW_TWO)
                                                            <option value="{{$disallow->type}}">{{$disallow->name}}</option>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </select>
                                            <span class="text-danger error ">{{$errors->first('disallowed_2')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for=""><b>{{__('Disallowed 3')}}<sup class="text-danger">*</sup></b> </label>
                                            <select class="form-control select2" name="disallowed_3[]" multiple="multiple">
                                                <option value="">{{__('Select')}}</option>
                                                @if(isset($disallows[0]))
                                                    @foreach($disallows as $disallow)
                                                        @if($disallow->type === DISALLOW_THREE)
                                                            <option value="{{$disallow->type}}">{{$disallow->name}}</option>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </select>
                                            <span class="text-danger error ">{{$errors->first('disallowed_3')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <br>
                                        <div class="form-check">
                                            <input class="form-check-input" name="disallowed_spicy" type="checkbox" @if(!empty($customer) && $customer->disallowed_spicy == 1) checked @elseif(!empty(old('rice')) && old('rice') == 1) checked @endif id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">{{__('Disallowed Spicy')}}</label>
                                        </div>
                                        <span class="text-danger error">{{$errors->first('disallowed_spicy')}}</span>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="receive_type"><b>{{__('Receive Type')}}<sup class="text-danger">*</sup></b> </label>
                                            <select class="form-control" name="receive_type" id="receive_type">
                                                <option value="">{{__('Select')}}</option>
                                                @foreach(receive_types() as $key => $value)
                                                    <option @if(!empty($customer)) value="{{$customer->receive_type}}" selected @elseif(!empty(old('receive_type'))) value="{{old('receive_type')}}" selected @else value="{{$key}}" @endif >{{$value}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger error ">{{$errors->first('receive_type')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="order_type"><b>{{__('Order Type')}}<sup class="text-danger">*</sup></b> </label>
                                            <select class="form-control" name="order_type" id="order_type">
                                                <option value="">{{__('Select')}}</option>
                                                @foreach(order_types() as $key => $value)
                                                    <option @if(!empty($customer)) value="{{$customer->order_type}}" selected @elseif(!empty(old('order_type'))) value="{{old('order_type')}}" selected @else value="{{$key}}" @endif >{{$value}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger error ">{{$errors->first('order_type')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="begin_date"><b>{{__('Begin Date')}}<sup class="text-danger">*</sup></b> </label>
                                        <div class="input-group">
                                            <input type="text" class="form-control begin_date" name="begin_date" id="begin_date">
                                            <div class="input-group-append">
                                                <span class="input-group-text selected_status" id="basic-addon2"></span>
                                            </div>
                                        </div>
                                        <span class="text-danger error ">{{$errors->first('begin_date')}}</span>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="driver_id"><b>{{__('Driver')}}<sup class="text-danger">*</sup></b> </label>
                                            <select class="form-control" name="driver_id" id="driver_id">
                                                <option value="">{{__('Select')}}</option>
                                                @if(isset($drivers[0]))
                                                    @foreach($drivers as $driver)
                                                        <option @if(!empty($customer)) value="{{$customer->driver_id}}" selected @elseif(!empty(old('driver_id'))) value="{{old('driver_id')}}" selected @else value="{{$driver->id}}" @endif >{{$driver->name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <span class="text-danger error ">{{$errors->first('driver_id')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="staff_id"><b>{{__('Person In Charge')}}<sup class="text-danger">*</sup></b> </label>
                                            <select class="form-control" name="staff_id" id="staff_id">
                                                <option value="">{{__('Select')}}</option>
                                                @if(isset($staffs[0]))
                                                    @foreach($staffs as $staff)
                                                        <option @if(!empty($customer)) value="{{$customer->staff_id}}" selected @elseif(!empty(old('staff_id'))) value="{{old('staff_id')}}" selected @else value="{{$staff->id}}" @endif >{{$staff->name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <span class="text-danger error ">{{$errors->first('staff_id')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="status"><b>{{__('Status')}}<sup class="text-danger">*</sup></b> </label>
                                            <select class="form-control status" name="status" id="status">
                                                <option value="">{{__('Select')}}</option>
                                                @foreach(order_status() as $key => $status)
                                                    <option @if(!empty($customer)) value="{{$customer->status}}" selected @elseif(!empty(old('status'))) value="{{old('status')}}" selected @else value="{{$key}}" @endif  data-status="{{$status}}">{{$status}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger error ">{{$errors->first('status')}}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="balance_date"><b>{{__('Balance Date')}}<sup class="text-danger">*</sup></b> </label>
                                        <div class="input-group">
                                            <input type="text" class="form-control balance_date" name="balance_date" disabled id="balance_date">
                                            <div class="input-group-append">
                                                <span class="input-group-text selected_status" id="basic-addon2"></span>
                                            </div>
                                        </div>
                                        <span class="text-danger error ">{{$errors->first('balance_date')}}</span>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="cancellation_date"><b>{{__('Cancellation Date')}}<sup  class="text-danger">*</sup></b> </label>
                                        <div class="input-group">
                                            <input type="text" class="form-control cancellation_date" name="cancellation_date" id="cancellation_date">
                                            <div class="input-group-append">
                                                <span class="input-group-text selected_status" id="basic-addon2"></span>
                                            </div>
                                        </div>
                                        <span class="text-danger error ">{{$errors->first('cancellation_date')}}</span>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <h6 class="text-center">
                                                <span id="destination-form-span"></span>
                                                <button id="submit-btn" type="submit" class="btn btn-primary ">
                                                    {{__('Create Customer')}}
                                                </button>
                                            </h6>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @include('Pages.Customer.Includes.scripts')

    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: 'Select'
            });

            $('select.package_day_id').on('change', function () {
                let day = $("option:selected", this).data('day');
                if (day > 0){
                    $(".balance_date").attr("disabled", false)
                }
            });

            $(".begin_date").flatpickr({
                minDate: "today"
            });

            $(".balance_date").flatpickr({
                mode: "multiple",
                minDate: "today"
            });

            $('.balance_date').on('input', function (){
                let day =$("option:selected", "select.package_day_id").data('day');
                let date = $(this).val();
                let date_array = date.split(',');

                if (date_array.length >= day){
                    $(this).attr("disabled", true)
                    $(".balance_date").flatpickr({
                        mode: "multiple",
                        minDate: "today",
                        defaultDate: date_array
                    });
                    alertDanger("You can\'n select more than selected package date");
                }
            })

            $(".cancellation_date").flatpickr({
                minDate: "today"
            });

            $(".status").on("change", function (){
                let status = $("option:selected", this).data('status');
                $(".selected_status").text(status);
            })
        });
    </script>
@endpush
