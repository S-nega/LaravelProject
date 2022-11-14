<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Projects\AddRequest;
use App\Http\Resources\CallBackListResource;
use App\Models\CallBackList;
use App\Models\Design;
use App\Models\Projects;
use App\Models\Image;
use App\Models\QuestionsList;
use App\Models\ServiceList;
use App\Models\User;
use App\Services\CallBackListService;
use App\Services\DesignService;
use Illuminate\Http\Request;

class CallBackListController extends Controller
{
    public function __construct(CallBackListService $callBackListService){
        $this->callBackListService = $callBackListService;
    }

    public function callBackList(){
        try {
            $callBackList = $this->callBackListService->callBackList();

            return response()->json([
                'status' => true,
                'callBackList' => CallBackListResource::collection($callBackList)
            ]);

        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], $e->getCode());
        }
    }
    public function addCallBackList(Request $request){
        try {
            $callBackList = $this->callBackListService->addCallBackList($request);
            return response()->json([
                'status' => true,
                'callBackList' => $callBackList
            ],200);
        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
    public function editCallBackList(CallBackList $callBackList, Request $request){
        try {
            $callBackList = $this->callBackListService->editCallBackList($callBackList, $request);
            return response()->json([
                'status' => true,
                'CallBackList' => $callBackList
            ],200);
        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
    public function deleteCallBackList(Request $request){
        try {
            $id = $request->id;
            $callBackList = $this->callBackListService->deleteCallBackList($id);
            return response()->json([
                'status' => true,
                'callBackList' => $callBackList
            ],200);
        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
}
