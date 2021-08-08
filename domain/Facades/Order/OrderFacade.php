<?php

namespace domain\Facades\Order;

use domain\Services\Order\OrderService;
use Illuminate\Support\Facades\Facade;

/**
 * User: Speralabs
 */
class OrderFacade extends Facade
{
    /**
     * getFacadeAccessor
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return OrderService::class;
    }
}
