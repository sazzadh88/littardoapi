<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public function getPhotoAttribute($value)
    {
        return $this->baseRoute().$value;
    }
}
