<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $fillable = [
        'title_hu',
        'title_en',
        'image',
        'sort_order',
    ];


    public function items()
    {
        return $this->hasMany(DivisionItem::class)
            ->orderBy('sort_order');
    }
}
