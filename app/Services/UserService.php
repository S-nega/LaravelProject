<?php

namespace App\Services;

//use App\Http\Requests\Projects\AddRequest;

interface UserService
{

    public function users();
    public function addUsers($request);
    public function editUsers($users, $request);
    public function deleteUsers($id);

}
