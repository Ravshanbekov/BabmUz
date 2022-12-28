<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fog extends Model
{
    use HasFactory;

    protected $fillable=['title_uz','description_uz','title_ru','description_ru','title_en','description_en', 'image', 'link'];
}
