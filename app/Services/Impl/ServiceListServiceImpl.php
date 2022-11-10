<?php

namespace App\Services\Impl;

use App\Models\ServiceList;
use App\Services\ServiceListService;


class ServiceListServiceImpl implements ServiceListService
{
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
}
