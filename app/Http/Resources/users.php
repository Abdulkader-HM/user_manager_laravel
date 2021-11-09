<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class users extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return
            [
                'name of user' => $this->name,
                'type of user' => $this->type,
                'email of user' => $this->email,
                'password of user' => $this->password,
            ];
    }
}
