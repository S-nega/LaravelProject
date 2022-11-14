<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CallBackListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name'=>$this->name,
            'surname'=>$this->surname,
            'phone'=>$this->phone,
            'description'=>$this->description
        ];
    }
}
