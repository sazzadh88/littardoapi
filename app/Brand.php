<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function getLogoAttribute($value)
    {
        return config('app.url').$value;
    }
}
