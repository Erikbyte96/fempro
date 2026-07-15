<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DivisionItem extends Model
{
    protected $fillable = [
        'division_id',
        'text_hu',
        'text_en',
        'sort_order',
    ];


    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
