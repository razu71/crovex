<?php

namespace domain\Facades\Customer;

use domain\Services\Customer\CustomerService;
use Illuminate\Support\Facades\Facade;

/**
 * User: Speralabs
 */
class CustomerFacade extends Facade
{    
    /**
     * getFacadeAccessor
     *
     * @return void
     */
    protected static function getFacadeAccessor()
    {
        return CustomerService::class;
    }
}