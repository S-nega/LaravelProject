<?php

namespace App\Services\Impl;

use App\Models\CallBackList;
use App\Services\CallBackListService;


class CallBackListServiceImpl implements CallBackListService
{
    public function callBackList(){
        $callBackList = CallBackList::all();
        if (!$callBackList){
            throw new \Exception('CallBackList is empty', 404);
        }
        return $callBackList;
    }

    public function addCallBackList($request){
        CallBackList::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'phone' => $request->phone,
            'description' => $request->description,
            'project_id' => $request->project_id,//добавить проверку на наличие этого параметра
            'service_id' => $request->service_id//добавить проверку на наличие этого параметра
        ]);
    }

    public function editCallBackList($callBackList, $request){
        $callBackList = CallBackList::find($request->id);
        $callBackList->name = $request->get('name');
        $callBackList->surname = $request->get('surname');
        $callBackList->phone = $request->get('phone');
        $callBackList->description = $request->get('description');
        $callBackList->project_id = $request->get('project_id');//добавить проверку на наличие этого параметра
        $callBackList->service_id = $request->get('service_id');//добавить проверку на наличие этого параметра

        $callBackList->save();
    }

    public function deleteCallBackList($id){
        CallBackList::find($id)->delete();
    }
}
