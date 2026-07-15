<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competency extends Model
{
    protected $fillable = [
        'label_hu',
        'label_en',
        'text_hu',
        'text_en',
        'image',
        'reverse_layout',
        'sort_order',
    ];


    protected $casts = [
        'reverse_layout' => 'boolean',
    ];


    public function items()
    {
        return $this->hasMany(CompetencyItem::class);
    }
}
