<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Projects\AddRequest;
use App\Models\CallBackList;
use App\Models\Design;
use App\Models\Projects;
use App\Models\Image;
use App\Models\QuestionsList;
use App\Models\ServiceList;
use App\Models\User;
use App\Services\DesignService;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function __construct(DesignService $designService){
        $this->designService = $designService;
}
    public function all(){
        try {
            $projects = $this->designService->getAll();

            return response()->json([
                'status' => true,
                'projects' => $projects
            ],200);

        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
    public function addProject(AddRequest $request){
        try {
            $project = $this->designService->addProject($request);
            return response()->json([
                'status' => true,
                'project' => $project
            ],200);
//            return redirect()->route('ourProductsP')->with('status', 'Project added!');
        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
    public function editProject(Projects $projects, Request $request){
        try {
            $project = $this->designService->editProject($projects, $request);
            return response()->json([
                'status' => true,
                'project' => $project
            ],200);
        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
    public function deleteProject(Request $request){
        try {
            $id = $request->id;
            $project = $this->designService->deleteProject($id);
            return response()->json([
                'status' => true,
                'project' => $project
            ],200);
        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }


    public function callBackList(){
        try {
            $callBackList = $this->designService->callBackList();

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
    public function addCallBackList(Request $request){
        try {
            $callBackList = $this->designService->addCallBackList($request);
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
            $callBackList = $this->designService->editCallBackList($callBackList, $request);
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
            $callBackList = $this->designService->deleteCallBackList($id);
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



    public function questionsList(){
        try {
            $questionsList = $this->designService->questionsList();

            return response()->json([
                'status' => true,
                'questionsList' => $questionsList
            ],200);

        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
    public function addQuestionsList(Request $request){
        try {
            $questionsList = $this->designService->addQuestionsList($request);
            return response()->json([
                'status' => true,
                'questionsList' => $questionsList
            ],200);
        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
    public function editQuestionsList(QuestionsList $questionsList, Request $request){
        try {
            $questionsList = $this->designService->editQuestionsList($questionsList, $request);
            return response()->json([
                'status' => true,
                'questionsList' => $questionsList
            ],200);
        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
    public function deleteQuestionsList(Request $request){
        try {
            $id = $request->id;
            $questionsList = $this->designService->deleteQuestionsList($id);
            return response()->json([
                'status' => true,
                'questionsList' => $questionsList
            ],200);
        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }


    public function serviceList(){
        try {
            $serviceList = $this->designService->serviceList();

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
    public function addServiceList(Request $request){
        try {
            $serviceList = $this->designService->addServiceList($request);
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
            $serviceList = $this->designService->editServiceList($serviceList, $request);
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
            $serviceList = $this->designService->deleteServiceList($id);
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



    public function users(){
        try {
            $users = $this->designService->users();

            return response()->json([
                'status' => true,
                'users' => $users
            ],200);

        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
    public function addUsers(Request $request){
        try {
            $users = $this->designService->addUsers($request);
            return response()->json([
                'status' => true,
                'users' => $users
            ],200);
        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
    public function editUsers(User $users, Request $request){
        try {
            $users = $this->designService->editUsers($users, $request);
            return response()->json([
                'status' => true,
                'users' => $users
            ],200);
        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
    public function deleteUsers(Request $request){
        try {
            $id = $request->id;
            $users = $this->designService->deleteUsers($id);
            return response()->json([
                'status' => true,
                'users' => $users
            ],200);
        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
}
