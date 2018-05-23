<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passengers extends Model
{
    protected $fillable = ['name', 'surname', 'patronymic', 'email', 'phone', 'trip_id', 'date', 'time', 'place'];
    public function trip() {
        return $this->belongsToMany(
                Passengers::class,
                'trip_passengers',
                'passengers_id',
                'trip_id'
                );
    }
}
