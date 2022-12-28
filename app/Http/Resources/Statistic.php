<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Statistic extends JsonResource
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
            'number' => $this->number,
            'icon' => $this->icon,
            'status' => $this->status == 1 ? 'active' : 'no active',
        ];
    }
}
