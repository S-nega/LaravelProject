<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Projects\AddRequest;
use App\Http\Resources\ServiceListResource;
use App\Models\CallBackList;
use App\Models\Design;
use App\Models\Projects;
use App\Models\Image;
use App\Models\QuestionsList;
use App\Models\ServiceList;
use App\Models\User;
use App\Services\DesignService;
use App\Services\ServiceListService;
use Illuminate\Http\Request;

class ServiceListController extends Controller
{
    public function __construct(ServiceListService $serviceListService){
        $this->serviceListService = $serviceListService;
    }

    public function serviceList(){
        try {
            $serviceList = $this->serviceListService->serviceList();

            return response()->json([
                'status' => true,
                'serviceList' => ServiceListResource::collection($serviceList)
            ]);

        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], $e->getCode());
        }
    }
    public function addServiceList(Request $request){
        try {
            $serviceList = $this->serviceListService->addServiceList($request);
            return response()->json([
                'status' => true,
                'serviceList' => $serviceList
            ],200);
        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
    public function editServiceList(ServiceList $serviceList, Request $request){
        try {
            $serviceList = $this->serviceListService->editServiceList($serviceList, $request);
            return response()->json([
                'status' => true,
                'serviceList' => $serviceList
            ],200);
        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
    public function deleteServiceList(Request $request){
        try {
            $id = $request->id;
            $serviceList = $this->serviceListService->deleteServiceList($id);
            return response()->json([
                'status' => true,
                'serviceList' => $serviceList
            ],200);
        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
}
