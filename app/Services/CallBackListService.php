<?php

namespace App\Services;

//use App\Http\Requests\Projects\AddRequest;

interface CallBackListService
{
    public function callBackList();
    public function addCallBackList($request);
    public function editCallBackList($callBackList, $request);
    public function deleteCallBackList($id);
}
