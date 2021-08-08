<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use domain\Services\Staff\StaffService;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    protected $staff_service;

    public function __construct()
    {
        $this->staff_service = new StaffService();
    }

    public function index()
    {
        $response['staffs'] = $this->staff_service->show();
        return view('Pages.Staff.index')->with($response);
    }

    /**
     * store a disallow item
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $store = $this->staff_service->store($request);
        if ($store['success'] == true){
            return redirect()->back()->with(['alert-success' => $store['message']]);
        }else{
            return redirect()->back()->with(['alert-danger' => $store['message']]);
        }
    }


    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        $response = $this->staff_service->destroy($id);
        if ($response['success'] == true){
            return response()->json(['success' => true, 'message' => $response['message']]);
        }else{
            return response()->json(['success' => false, 'message' => $response['message']]);
        }
    }
}
