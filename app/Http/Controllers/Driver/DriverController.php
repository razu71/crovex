<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use domain\Facades\Driver\DriverFacade;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['drivers'] = DriverFacade::show();
        return view('Pages.Driver.index')->with($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DriverFacade::create($request->all());
        $response['alert-success'] = "Driver Create Successfully";
        return redirect()->route('drivers.index')->with($response);
    }

    public function delete($id)
    {
        DriverFacade::destroy(DriverFacade::get($id));
        $response['alert-success'] = "Driver Delete Successfully";
        return redirect()->back()->with($response);  
    }
}