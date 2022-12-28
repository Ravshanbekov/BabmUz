<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Post as PostResource;
use App\Http\Resources\Event as EventResource;
class Category extends JsonResource
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
            'name_uz' => $this->name_uz,
            'name_ru' => $this->name_ru,
            'name_en' => $this->name_en,
            'slug_uz' => $this->slug_uz,
            'slug_ru' => $this->slug_ru,
            'slug_en' => $this->slug_en,
            'posts' => PostResource::collection($this->post),
            'events' => EventResource::collection($this->event),
            'created_at' => $this->created_at->format('d/m/Y')
        ];
    }
}
