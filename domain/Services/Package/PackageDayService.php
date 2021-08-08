<?php

namespace domain\Services\Package;

use App\Models\Package\PackageDay;

class PackageDayService
{    
    protected $package_days;

    public function __construct()
    {
        $this->package_days = new PackageDay();
    }

    public function get($id)
    {
        return $this->package_days::find($id);
    }

    public function show()
    {
        return $this->package_days->all();
    }

    public function create($request)
    {
        unset($request['_token']);
        $this->package_days->create($request);
    }

    public function destroy(PackageDay $package_days)
    {
        $package_days->delete();
    }
}