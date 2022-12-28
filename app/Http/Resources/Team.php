<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Team extends JsonResource
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
            'id'=> $this->id,
            'name_uz'=> $this->name_uz,
            'name_ru'=> $this->name_ru,
            'lastname_uz'=> $this->lastname_uz,
            'lastname_ru'=> $this->lastname_ru,
            'email'=> $this->email,
            'phone'=> $this->phone,
            'telegram'=> $this->telegram,
            'instagram'=> $this->instagram,
            'facebook'=> $this->facebook,
            'position_uz'=> $this->position_uz,
            'position_ru'=> $this->position_ru,
            'position_en'=> $this->position_en,
            'image'=> $this->image,
            'status'=> $this->status == 1 ? 'active' : 'no active',
            'check'=> $this->check == 'direktor' ? 'direktor' : 'xodim'
        ];
    }
}
