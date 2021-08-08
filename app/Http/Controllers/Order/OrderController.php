<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use domain\Facades\Order\OrderFacade;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['orders'] = OrderFacade::show();
        return view('Pages.Order.index')->with($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pages.Order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function delete($id)
    {
        OrderFacade::destroy(OrderFacade::get($id));
        $response['alert-success'] = "Order Delete Successfully";
        return redirect()->back()->with($response);
    }
}
