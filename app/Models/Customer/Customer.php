<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'contact',
        'package_type_id',
        'package_day_id',
        'meal_time',
        'pax',
        'receiver_name',
        'receiver_contact',
        'unit_number',
        'road',
        'city',
        'postcode',
        'state',
        'meal_package',
        'soup_package',
        'building_name',
        'soup',
        'rice',
        'disallowed_1',
        'disallowed_2',
        'disallowed_3',
        'disallowed_spicy',
        'receive_type',
        'order_type',
        'begin_date',
        'driver_id',
        'staff_id',
        'status',
        'balance_date',
        'cancellation_date',
        'profile_id',
        'order_id',
    ];
}
