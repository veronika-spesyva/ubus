<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Trip extends Model
{
    use Sluggable;
    
    public function cities() {
        return $this->belongsToMany(
                Cities::class,
                'trip_cities',
                'trip_id',
                'city_id'
                );
    }
    public function passengers() {
        return $this->belongsToMany(
                Passengers::class,
                'trip_passengers',
                'trip_id',
                'passengers_id'
                );
    }
    public function buses() {
        return $this->hasOne(Buses::class);
    }
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
