<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Course extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return 
        [
            'id' => $this->id,
            'title_uz' => $this->title_uz,
            'description_uz' => $this->description_uz,
            'title_ru' => $this->title_ru,
            'description_ru' => $this->description_ru,
            'title_en' => $this->title_en,
            'description_en' => $this->description_en,
            'image' => $this->image,
            'created_at' => $this->created_at->format('d/m/Y'),
        ];
    }
}
