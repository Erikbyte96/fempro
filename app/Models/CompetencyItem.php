<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompetencyItem extends Model
{
    protected $fillable = [
        'competency_id',
        'text_hu',
        'text_en',
        'sort_order',
    ];


    public function competency()
    {
        return $this->belongsTo(Competency::class);
    }
}
