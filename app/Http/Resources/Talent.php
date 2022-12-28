<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Talent extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'name_uz' => $this->name_uz,
            'name_ru' => $this->name_ru,
            'lastname_uz' => $this->lastname_uz,
            'lastname_ru' => $this->lastname_ru,
            'school_uz' => $this->school_uz,
            'school_ru' => $this->school_ru,
            'image' => $this->image,
            'science_uz' => $this->science_uz,
            'science_ru' => $this->science_ru,
            'category' => $this->category == 1 ? 'Sovrindor' : 'Iqtidor',
            'created_at' => $this->created_at->format('d/m/Y'),
        ];
    }
}
