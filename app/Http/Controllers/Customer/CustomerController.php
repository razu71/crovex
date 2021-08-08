<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ParentController;
use App\Http\Requests\Customer\CustomerSaveRequest;
use App\Models\Customer\Customer;
use App\Models\Disallow\Disallow;
use App\Models\Driver\Driver;
use App\Models\Order\Order;
use App\Models\Package\PackageDay;
use App\Models\Package\PackageType;
use App\Models\Staff\Staff;
use domain\Facades\Customer\CustomerFacade;
use domain\Services\Customer\CustomerService;
use Illuminate\Http\Request;
use Validator;

class CustomerController extends ParentController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['customers'] = CustomerFacade::show();
        return view('Pages.Customer.index')->with($response);
    }

    public function create()
    {
        $data['package_types'] = PackageType::get();
        $data['package_days'] = PackageDay::get();
        $data['disallows'] = Disallow::get();
        $data['drivers'] = Driver::get();
        $data['staffs'] = Staff::get();
        return view('Pages.Customer.create', $data);
    }
    public function edit($id)
    {
        $data['customer'] = Customer::find($id);
        $data['package_types'] = PackageType::get();
        $data['package_days'] = PackageDay::get();
        $data['disallows'] = Disallow::get();
        $data['drivers'] = Driver::get();
        $data['staffs'] = Staff::get();
        return view('Pages.Customer.create', $data);
    }


    public function store(CustomerSaveRequest $request)
    {
        $customer_service = new CustomerService();
        $store = $customer_service->store($request);
        if (isset($store['success']) && $store['success'] == true){
            return redirect()->route('customers.index')->with(['alert-success' => $store['message']]);
        }else{
            return redirect()->back()->withInput($request->all())->with(['alert-danger' => __('Something went wrong')]);
        }
    }

    public function delete($id)
    {
        CustomerFacade::destroy(CustomerFacade::get($id));
        $response['alert-success'] = "Customer Delete Successfully";
        return redirect()->back()->with($response);
    }
}
