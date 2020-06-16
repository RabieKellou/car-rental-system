<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    // Relationships
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
