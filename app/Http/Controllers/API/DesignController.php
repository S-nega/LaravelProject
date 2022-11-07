<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Projects\AddRequest;
use App\Models\Design;
use App\Models\Projects;
use App\Models\Image;
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
}
