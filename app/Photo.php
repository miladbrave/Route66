<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $uploads = '/photo/';

    public function getPathAttribute($photo)
    {
        return $this->uploads . $photo;
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
    public function cosult()
    {
        return $this->belongsTo(Cosult::class);
    }
}
