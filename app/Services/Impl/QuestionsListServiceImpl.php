<?php

namespace App\Services\Impl;

use App\Models\QuestionsList;
use App\Services\QuestionsListService;


class QuestionsListServiceImpl implements QuestionsListService
{
    public function questionsList(){
        $questionsList = QuestionsList::all();
        if (!$questionsList){
            throw new \Exception('QuestionsList is empty', 404);
        }
        return $questionsList;
    }
    public function addQuestionsList($request){
        QuestionsList::create([
            'description' => $request->description,
            'answer' => $request->answer,
        ]);
    }
    public function editQuestionsList($questionsList, $request){
        $questionsList = QuestionsList::find($request->id);
        $questionsList->description = $request->get('description');
        $questionsList->answer = $request->get('answer');

        $questionsList->save();
    }
    public function deleteQuestionsList($id){
        QuestionsList::find($id)->delete();
    }
}
