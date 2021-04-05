<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cosult extends Model
{
    public function photo()
    {
        return $this->hasOne(Photo::class);
    }

    public function car()
    {
        return $this->hasMany(Car::class);
    }
    public function home()
    {
        return $this->belongsToMany(Product::class);
    }
}
