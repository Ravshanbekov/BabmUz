<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class About extends JsonResource
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
            'title_ru' => $this->title_ru,
            'title_en' => $this->title_en,
            'description_uz' => $this->description_uz,
            'description_ru' => $this->description_ru,
            'description_en' => $this->description_en,
            'body_uz' => $this->body_uz,
            'body_ru' => $this->body_ru,
            'body_en' => $this->body_en,
            'image' => $this->image,
            'status'=>$this->status == 1 ? 'active' : 'no active',
            'created_at' => $this->created_at->format('d/m/Y'),
        ];
    }
}
