<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=['category_id','title_uz','title_ru', 'title_en', 'description_uz', 'description_ru', 'description_en', 'body_uz', 'body_ru', 'body_en', 'image' , 'status', 'slug_uz', 'slug_ru', 'slug_en'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
