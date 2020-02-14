<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public function getPhotoAttribute($value)
    {
        return "http://www.littardoemporium.com/public/".$value;
    }
}
