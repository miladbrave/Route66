<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
    public function carproperty()
    {
        return $this->hasMany(Carproperty::class);
    }

}
