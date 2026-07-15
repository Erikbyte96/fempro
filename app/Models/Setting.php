<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [

        'company_name',

        'address_hu',
        'address_en',

        'phone',

        'email',

        'logo',

        'footer_logo',

    ];
}
