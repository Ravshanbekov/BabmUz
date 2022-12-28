<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable=['name_uz','name_ru','name_en','slug_uz','slug_ru','slug_en'];

    public function post()
    {
        return $this->hasMany(Post::class, 'category_id');
    }

    public function event()
    {
        return $this->hasMany(Event::class, 'category_id');
    }
}
