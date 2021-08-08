<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class CustomerSaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required|min:4',
            'package_type_id' => 'required',
            'package_day_id' => 'required',
            'meal_time' => 'required',
            'pax' => 'required',
            'receiver_name' => 'required',
            'unit_number' => 'required',
            'road' => 'required',
            'city' => 'required',
            'postcode' => 'required',
            'state' => 'required',
            'meal_package' => 'required',
            'soup_package' => 'required',
            'soup' => 'required',
            'rice' => 'required',
            'disallowed_1' => 'required',
            'disallowed_2' => 'required',
            'disallowed_3' => 'required',
            'disallowed_spicy' => 'required',
            'receive_type' => 'required',
            'order_type' => 'required',
            'begin_date' => 'required',
            'driver_id' => 'required',
            'staff_id' => 'required',
            'status' => 'required',
            'balance_date' => 'required',
            'cancellation_date' => 'required',
        ];

        if ($this->has('edit_id') && $this->edit_id != NULL) {
            $edit_id = $this->edit_id;
            $rules['contact'] = 'required|unique:customers,contact,'.$edit_id;
            $rules['receiver_contact'] = 'required|unique:customers,receiver_contact,'.$edit_id;
        }else{
            $rules['contact'] = 'required|unique:customers,contact';
            $rules['receiver_contact'] = 'required|unique:customers,receiver_contact';
        }

        return $rules;
    }
}
