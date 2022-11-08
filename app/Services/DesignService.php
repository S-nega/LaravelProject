<?php

namespace App\Services;

//use App\Http\Requests\Projects\AddRequest;

interface DesignService
{
    public function getAll();
    public function addProject($request);
    public function editProject($projects, $request);
    public function deleteProject($id);

    public function callBackList();
    public function addCallBackList($request);
    public function editCallBackList($callBackList, $request);
    public function deleteCallBackList($id);

    public function questionsList();
    public function addQuestionsList($request);
    public function editQuestionsList($questionsList, $request);
    public function deleteQuestionsList($id);

    public function serviceList();
    public function addServiceList($request);
    public function editServiceList($serviceList, $request);
    public function deleteServiceList($id);

    public function users();
    public function addUsers($request);
    public function editUsers($users, $request);
    public function deleteUsers($id);

}
