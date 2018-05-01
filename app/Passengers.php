<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passengers extends Model
{
    public function trip() {
        return $this->belongsToMany(
                Passengers::class,
                'trip_passengers',
                'passengers_id',
                'trip_id'
                );
    }
}
