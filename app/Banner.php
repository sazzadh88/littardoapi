<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public function getPhotoAttribute($value)
    {
        return config('app.url').$value;
    }
}
