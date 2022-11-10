<?php

namespace App\Services;

//use App\Http\Requests\Projects\AddRequest;

interface ServiceListService
{
    public function serviceList();
    public function addServiceList($request);
    public function editServiceList($serviceList, $request);
    public function deleteServiceList($id);
}
