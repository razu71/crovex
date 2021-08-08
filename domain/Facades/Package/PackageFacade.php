<?php

namespace domain\Facades\Package;

use domain\Services\Package\PackageService;
use Illuminate\Support\Facades\Facade;

/**
 * User: Speralabs
 */
class PackageFacade extends Facade
{    
    /**
     * getFacadeAccessor
     *
     * @return void
     */
    protected static function getFacadeAccessor()
    {
        return PackageService::class;
    }
}