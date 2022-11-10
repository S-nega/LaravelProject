<?php

namespace App\Services;

//use App\Http\Requests\Projects\AddRequest;

interface QuestionsListService
{
    public function questionsList();
    public function addQuestionsList($request);
    public function editQuestionsList($questionsList, $request);
    public function deleteQuestionsList($id);
}
