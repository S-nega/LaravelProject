<?php

namespace App\Services;

//use App\Http\Requests\Projects\AddRequest;

interface DesignService
{
    public function getAll();
    public function addProject($request);
    public function editProject($projects, $request);
    public function deleteProject($id);
}
