<?php

namespace domain\Services\Package;

use App\Models\Package\PackageType;

class PackageService
{    
    protected $package_types;

    public function __construct()
    {
        $this->package_types = new PackageType();   
    }

    public function get($id)
    {
        return $this->package_types::find($id);
    }
    
    public function show()
    {
        return $this->package_types->all();
    }

    public function create($reqeust)
    {
        unset($reqeust['_token']);
        $this->package_types->create($reqeust);
    }

    public function destroy(PackageType $package_types)
    {
        $package_types->delete();   
    }
    
}