<?php

namespace App\Services\Impl;

use App\Models\CallBackList;
use App\Models\Projects;
use App\Models\Image;
use App\Models\QuestionsList;
use App\Models\ServiceList;
use App\Models\User;
use App\Services\DesignService;
use http\QueryString;


class DesignServiceImpl implements DesignService
{
    public function getAll(){
        $projects = Projects::all();
        if (!$projects){
            throw new \Exception('Project is empty', 404);
        }
        return $projects;
    }
    public function addProject($request){
        if ($request->hasFile('image_src')) {
            $url = $request->file('image_src')->store('images');
            $project =
                Projects::create([
                    'shortDescription' => $request->shortDescription,
                    'location' => $request->location,
                    'author' => $request->author,
                    'image_src' => $url
                ]);
            Image::create([
                'image_src' => $url,
                'project_id' => $project->id
            ]);
        }
    }
    public function editProject($projects, $request){
        $project = Projects::find($request->id);
        $project->shortDescription = $request->get('shortDescription');
        $project->location = $request->get('location');
        $project->author = $request->get('author');
        $project->image_src = $request->file('image_src')->store('images');
        $project->save();
    }
    public function deleteProject($id){
        Projects::find($id)->delete();
    }


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


    public function serviceList(){
        $serviceList = ServiceList::all();
        if (!$serviceList){
            throw new \Exception('ServiceList is empty', 404);
        }
        return $serviceList;
    }
    public function addServiceList($request){
        ServiceList::create([
            'name' => $request->name,
            'description' => $request->description,
            'cost' => $request->cost,
        ]);
    }
    public function editServiceList($serviceList, $request){
        $serviceList = ServiceList::find($request->id);
        $serviceList->name = $request->get('name');
        $serviceList->description = $request->get('description');
        $serviceList->cost = $request->get('cost');

        $serviceList->save();
    }
    public function deleteServiceList($id){
        ServiceList::find($id)->delete();
    }



    public function users(){
        $users = User::all();
        if (!$users){
            throw new \Exception('Users is empty', 404);
        }
        return $users;
    }
    public function addUsers($request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'verifyCode' => $request->verifyCode,
            'status' => $request->status,
            'password' => $request->password,
        ]);
    }
    public function editUsers($users, $request){
        $users = User::find($request->id);
        $users->name = $request->get('name');
        $users->email = $request->get('email');
        $users->verifyCode = $request->get('verifyCode');
        $users->status = $request->get('status');
        $users->password = $request->get('password');

        $users->save();
    }
    public function deleteUsers($id){
        User::find($id)->delete();
    }
}
