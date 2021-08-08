<?php

namespace domain\Services\Customer;

use App\Models\Customer\Customer;
use App\Models\Package\PackageType;
use domain\Traits\Common\MessageTraits;

class CustomerService
{
    use MessageTraits;
    protected $customers;

    public function __construct()
    {
        $this->customers = new Customer();
    }

    public function show()
    {
        return $this->customers->all();
    }

    public function get($id)
    {
        return $this->customers::find($id);
    }

    protected function makeCustomerData($request)
    {
        return [
            'name' => $request->name,
            'contact' => $request->contact,
            'package_type_id' => $request->package_type_id,
            'package_day_id' => $request->package_day_id,
            'meal_time' => $request->meal_time,
            'pax' => $request->pax,
            'receiver_name' => $request->receiver_name,
            'receiver_contact' => $request->receiver_contact,
            'unit_number' => $request->unit_number,
            'road' => $request->road,
            'city' => $request->city,
            'postcode' => $request->postcode,
            'state' => $request->state,
            'meal_package' => $request->meal_package,
            'soup_package' => $request->soup_package,
            'building_name' => $request->building_name,
            'soup' => $request->soup,
            'rice' => $request->rice,
            'disallowed_1' => implode(',',$request->disallowed_1),
            'disallowed_2' => implode(',', $request->disallowed_2),
            'disallowed_3' => implode(',', $request->disallowed_3),
            'disallowed_spicy' => $request->disallowed_spicy == 'on' ? 1 :0,
            'receive_type' => $request->receive_type,
            'order_type' => $request->order_type,
            'begin_date' => $request->begin_date,
            'driver_id' => $request->driver_id,
            'staff_id' => $request->staff_id,
            'status' => $request->status,
            'balance_date' => $request->balance_date,
            'cancellation_date' => $request->cancellation_date,
            'profile_id' => 'LFT'.rand(0000,9999),
            'order_id' => PackageType::find($request->package_type_id)['name'].rand(0000,9999)
        ];
    }

    public function store($request)
    {
        try {
            $data = $this->makeCustomerData($request);
            if ($request->has('edit_id') && $request->edit_id != null){
                $this->customers->where('id', $request->edit_id)->update($data);
                $this->data['message'] = __('Customer updated successfully');
            }else{
                $this->customers->create($data);
                $this->data['message'] = __('Customer created successfully');
            }
            $this->data['success'] = true;
            return $this->data;
        }catch (\Exception $exception){
            info("Customer create error message ".$exception->getMessage()." Line ".$exception->getLine());
            return $this->data;
        }
    }

    public function destroy(Customer $customers)
    {
        $customers->delete();
    }

}
