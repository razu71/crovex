<?php

namespace domain\Facades\Driver;

use domain\Services\Driver\DriverService;
use Illuminate\Support\Facades\Facade;

/**
 * User: Speralabs
 */
class DriverFacade extends Facade
{    
    /**
     * getFacadeAccessor
     *
     * @return void
     */
    protected static function getFacadeAccessor()
    {
        return DriverService::class;
    }
}