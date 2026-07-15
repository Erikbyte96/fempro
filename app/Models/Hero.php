<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = [

        'title_hu',
        'title_en',

        'text_hu',
        'text_en',

        'image',

    ];
}
