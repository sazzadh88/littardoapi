<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public function getPhotoAttribute($value)
    {
        return env('APP_URL').$value;
    }
}
