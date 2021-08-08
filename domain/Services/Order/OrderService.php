<?php

namespace domain\Services\Order;

use App\Models\Order\Order;

class OrderService
{    
    protected $orders;

    public function __construct()
    {
        $this->orders = new Order();
    }

    public function show()
    {
        return $this->orders->all();
    }

    public function get($id)
    {
        return $this->orders::find($id);
    }

    public function create($request)
    {
        unset($request['_token']);
        $this->orders->create($request);
    }

    public function destroy(Order $orders)
    {
        $orders->delete();
    }
    
}