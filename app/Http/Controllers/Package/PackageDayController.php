<?php

namespace App\Http\Controllers\Package;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ParentController;
use App\Models\Package\PackageDay;
use domain\Facades\Package\PackageDayFacade;
use domain\Facades\Package\PackageFacade;
use Illuminate\Http\Request;

class PackageDayController extends ParentController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['package_days']= PackageDayFacade::show(); 
        return view('Pages.Package.Day.index')->with($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PackageDayFacade::create($request->all());
        $response['alert-success'] = "Package Day Create Successfully";
        return redirect()->route('package_days.index')->with($response);
    }

    public function delete($id)
    {
        PackageDayFacade::destroy(PackageDayFacade::get($id));
        $response['alert-success'] = "Package Day Delete Successfully";
        return redirect()->back()->with($response);
    }
}