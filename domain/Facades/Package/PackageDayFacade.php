<?php

namespace domain\Facades\Package;

use domain\Services\Package\PackageDayService;
use Illuminate\Support\Facades\Facade;

/**
 * User: Speralabs
 */
class PackageDayFacade extends Facade
{    
    /**
     * getFacadeAccessor
     *
     * @return void
     */
    protected static function getFacadeAccessor()
    {
        return PackageDayService::class;
    }
}