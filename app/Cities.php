<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    public function trip() {
        return $this->belongsToMany(
                Cities::class,
                'trip_cities',
                'city_id',
                'trip_id'
                );
    }
}
