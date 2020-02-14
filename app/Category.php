<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getIconAttribute($value)
    {
        return config('app.url').$value;
    }

    public function getBannerAttribute($value)
    {
        return config('app.url').$value;
    }
}
