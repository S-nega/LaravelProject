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
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function users(){
        try {
            $users = $this->userService->users();

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
            $users = $this->userService->addUsers($request);
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
            $users = $this->userService->editUsers($users, $request);
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
            $users = $this->userService->deleteUsers($id);
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
