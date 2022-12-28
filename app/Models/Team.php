<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable=['name_uz','lastname_uz','name_ru','lastname_ru','email','check','phone','position_uz','position_ru','position_en','status','telegram','instagram','facebook','image'];
}
