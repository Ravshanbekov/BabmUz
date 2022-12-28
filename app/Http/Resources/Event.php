<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Event extends JsonResource
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
            'body_uz' => $this->body_uz,
            'body_ru' => $this->body_ru,
            'body_en' => $this->body_en,
            'link' => $this->link,
            'image' => $this->image,
            'slug_uz' => $this->slug_uz,
            'slug_ru' => $this->slug_ru,
            'slug_en' => $this->slug_en,
            'category' => $this->category,
            'status'=>$this->status == 1 ? 'active' : 'no active',
            'created_at' => $this->created_at->format('d/m/Y'),
        ];
    }
}
