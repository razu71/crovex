<?php

namespace App\Models\Order;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'package_type_id',
        'package_days_id',
        'time',
        'pax',
        'reciever_name',
        'reciever_address',
        'postcode',
        'meal_package',
        'soup_package',
        'meal',
        'soup',
        'disallowed_1',
        'disallowed_2',
        'disallowed_3',
        'recieve_type',
        'order_type',
        'deliver_date',
        'cancel_date',
        'driver_id',
        'incharge',
        'status'
    ];

    public static function orderStatus()
    {
        return [
            self::ORDER_STATUS_ACTIVE => 'Active',
            self::ORDER_STATUS_LAST_DAY => 'Last Day',
            self::ORDER_STATUS_ON_HOLD => 'On Hold',
            self::ORDER_STATUS_END => 'End'
        ];
    }

    public static function disallowOne()
    {
        return [
            'Pork', 'Chiken', 'Fish', 'None'
        ];
    }

    public static function disallowTwo()
    {
        return [
            'Eggplant', 'Bittergourd', 'None'
        ];
    }

    public static  function disallowThree()
    {
        return [
            'JapanTofu', 'Tofu', 'None'
        ];
    }
}
