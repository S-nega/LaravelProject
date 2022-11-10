<?php

namespace App\Services\Impl;

use App\Models\User;
use App\Services\UserService;


class UserServiceImpl implements UserService
{
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
