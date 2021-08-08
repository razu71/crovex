<?php

namespace App\Http\Controllers\Disallow;

use App\Http\Controllers\Controller;
use domain\Facades\Menu\MenuFacade;
use domain\Services\Disallow\DisallowService;
use Illuminate\Http\Request;

class DisallowController extends Controller
{
    protected $disallow_service;

    public function __construct()
    {
        $this->disallow_service = new DisallowService();
    }

    public function index()
    {
        $response['disallows'] = $this->disallow_service->show();
        return view('Pages.Disallow.index')->with($response);
    }

    /**
     * store a disallow item
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $store = $this->disallow_service->store($request);
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
        $response = $this->disallow_service->destroy($id);
        if ($response['success'] == true){
            return response()->json(['success' => true, 'message' => $response['message']]);
        }else{
            return response()->json(['success' => false, 'message' => $response['message']]);
        }
    }
}
