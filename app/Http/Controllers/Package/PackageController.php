<?php

namespace App\Http\Controllers\Package;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ParentController;
use domain\Facades\Package\PackageFacade;
use domain\Services\Package\PackageService;
use Facade\Ignition\Support\Packagist\Package;
use Illuminate\Http\Request;

class PackageController extends ParentController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['packages'] = PackageFacade::show();
        return view('Pages.Package.Main.index')->with($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PackageFacade::create($request->all());
        $response['alert-success'] = "Package Type Create Successfully";
        return redirect()->route('packages.index')->with($response);
    }

    public function delete($id)
    {
        PackageFacade::destroy(PackageFacade::get($id));
        $response['alert-success'] = "Package Type Delete Successfully";
        return redirect()->back()->with($response);
    }
}