<?php

namespace domain\Services\Driver;

use App\Models\Driver\Driver;

class DriverService
{    
    protected $drivers;

    public function __construct()
    {
        $this->drivers = new Driver();
    }

    public function show()
    {
        return $this->drivers->all();
    }

    public function get($id)
    {
        return $this->drivers::find($id);
    }

    public function create($request)
    {
        unset($request['_token']);
        $this->drivers->create($request);
    }

    public function destroy(Driver $drivers)
    {
        $drivers->delete();
    }
    
}