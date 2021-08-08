<?php

namespace domain\Services\Menu;

use App\Models\Menus\Menu;

class MenuService
{    
    protected $menus;

    public function __construct()
    {
        $this->menus = new Menu();
    }

    public function get($id)
    {
        return $this->menus::find($id);
    }

    public function show()
    {
        return $this->menus->all();
    }
    
    public function create($data)
    {
        unset($data['_token']);
        $this->menus->create($data);
    }

    public function destroy(Menu $menus)
    {
        $menus->delete();
    }
    
}