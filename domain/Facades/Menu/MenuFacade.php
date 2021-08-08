<?php

namespace domain\Facades\Menu;

use domain\Services\Menu\MenuService;
use Illuminate\Support\Facades\Facade;

/**
 * User: Speralabs
 */
class MenuFacade extends Facade
{    
    /**
     * getFacadeAccessor
     *
     * @return void
     */
    protected static function getFacadeAccessor()
    {
        return MenuService::class;
    }
}