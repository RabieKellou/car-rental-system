<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'car_desc',
        'brand',
        'model',
        'fuelType',
        'gearBoxType',
        'doorCount',
        'seatCount',
        'price',
        'purchase_date',
        'category_id',
    ];
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

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
