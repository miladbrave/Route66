<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function productcompletes()
    {
        return $this->hasMany(Productcomplete::class);
    }

    public function productproperty()
    {
        return $this->hasMany(Productproperty::class);
    }

}
