<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Projects\AddRequest;
use App\Http\Resources\QuestionListResource;
use App\Models\CallBackList;
use App\Models\Design;
use App\Models\Projects;
use App\Models\Image;
use App\Models\QuestionsList;
use App\Models\ServiceList;
use App\Models\User;
use App\Services\DesignService;
use App\Services\QuestionsListService;
use Illuminate\Http\Request;

class QuestionsListController extends Controller
{
    public function __construct(QuestionsListService $questionsListService){
        $this->questionsListService = $questionsListService;
    }


    public function questionsList(){
        try {
            $questionsList = $this->questionsListService->questionsList();

            return response()->json([
                'status' => true,
                'questionsList' => QuestionListResource::collection($questionsList)
            ]);

        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], $e->getCode());
        }
    }

    public function addQuestionsList(Request $request){
        try {
            $questionsList = $this->questionsListService->addQuestionsList($request);
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
            $questionsList = $this->questionsListService->editQuestionsList($questionsList, $request);
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
            $questionsList = $this->questionsListService->deleteQuestionsList($id);
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
}
