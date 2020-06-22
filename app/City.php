<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}
