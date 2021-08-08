<?php

if (!function_exists('disallow_items')) {
    function disallow_items($input = null)
    {
        $output = [
            DISALLOW_ONE => __('Disallow One'),
            DISALLOW_TWO => __('Disallow Two'),
            DISALLOW_THREE => __('Disallow Three')
        ];

        if ($input != NULL) {
            return $output[$input];
        } else {
            return $output;
        }
    }
}

if (!function_exists('order_status')) {
    function order_status($input = null)
    {
        $output = [
            ORDER_STATUS_ACTIVE => __('Active'),
            ORDER_STATUS_LAST_DAY => __('Last Day'),
            ORDER_STATUS_ON_HOLD => __('On Hold'),
            ORDER_STATUS_END => __('End')
        ];

        if ($input != NULL) {
            return $output[$input];
        } else {
            return $output;
        }
    }
}

if (!function_exists('meal_times')) {
    function meal_times($input = null)
    {
        $output = [
            LUNCH => __('Lunch'),
            DINNER => __('Dinner'),
            LUNCH_AND_DINNER => __('Lunch + Dinner')
        ];

        if ($input != NULL) {
            return $output[$input];
        } else {
            return $output;
        }
    }
}

if (!function_exists('choose_pax')) {
    function choose_pax($input = null)
    {
        $output = [
            PAX_ONE => __('1'),
            PAX_TWO => __('2'),
            PAX_THREE => __('3'),
            PAX_FOUR => __('4'),
            PAX_FIVE => __('5')
        ];

        if ($input != NULL) {
            return $output[$input];
        } else {
            return $output;
        }
    }
}

if (!function_exists('meal_packages')) {
    function meal_packages($input = null)
    {
        $output = [
            MEAL_PACKAGE_TIFFIN => 'Tiffin',
            MEAL_PACKAGE_CUSTOMER_TIFFIN => 'Customer\'s Tiffin',
            MEAL_PACKAGE_DISPOSABLE_TUPPERWARE => 'Disposable Tupperware'
        ];

        if ($input != NULL) {
            return $output[$input];
        } else {
            return $output;
        }
    }
}

if (!function_exists('soup_packages')) {
    function soup_packages($input = null)
    {
        $output = [
            SOUP_PACKAGE_CONTAINER => 'Container',
            SOUP_PACKAGE_PLASTIC_BAG => 'Plastic Bag',
            SOUP_PACKAGE_DISPOSABLE_TUPPERWARE => 'Disposable Tupperware',
            SOUP_PACKAGE_NONE => 'None'
        ];

        if ($input != NULL) {
            return $output[$input];
        } else {
            return $output;
        }
    }
}

if (!function_exists('soup')) {
    function soup($input = null)
    {
        $output = [
            SOUP_ZERO => '0',
            SOUP_ONE => '1',
            SOUP_TWO => '2',
            SOUP_THREE => '3',
            SOUP_NO => 'No'
        ];

        if ($input != NULL) {
            return $output[$input];
        } else {
            return $output;
        }
    }
}

if (!function_exists('rice')) {
    function rice($input = null)
    {
        $output = [
            RICE_ZERO => '0',
            RICE_ONE => '1',
            RICE_TWO => '2',
            RICE_THREE => '3',
            RICE_NO => 'No'
        ];

        if ($input != NULL) {
            return $output[$input];
        } else {
            return $output;
        }
    }
}

if (!function_exists('receive_types')) {
    function receive_types($input = null)
    {
        $output = [
            RECEIVE_TYPE_CALL => 'Call',
            RECEIVE_TYPE_WHATSAPP => 'Whatsapp',
            RECEIVE_TYPE_DOOR_BELL => 'Door Bell',
            RECEIVE_TYPE_CONTACTLESS_DOORSTEP => 'Contactless Doorstep'
        ];

        if ($input != NULL) {
            return $output[$input];
        } else {
            return $output;
        }
    }
}

if (!function_exists('order_types')) {
    function order_types($input = null)
    {
        $output = [
            ORDER_TYPE_FULL_INCLUDED_PH => 'Full included PH',
            ORDER_TYPE_FULL_EXCEPT_PH => 'Full except PH',
            ORDER_TYPE_FULL_EXCEPT => 'Full except',
            ORDER_TYPE_FULL_EXCEPT_PH_PLUS => 'Full except PH + ',
            ORDER_TYPE_ADVANCE_CANCELLATION => 'Advance Cancellation',
            ORDER_TYPE_FLEXIBLE => 'Flexible',
        ];

        if ($input != NULL) {
            return $output[$input];
        } else {
            return $output;
        }
    }
}
