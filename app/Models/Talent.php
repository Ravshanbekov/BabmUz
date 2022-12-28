<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    use HasFactory;
    
    protected $fillable=['name_uz','lastname_uz','name_ru','lastname_ru','image','school_uz','science_uz','school_ru','science_ru','category'];
}
