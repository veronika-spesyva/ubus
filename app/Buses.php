<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buses extends Model
{
    public function trip() {
        return $this->hasMany(Trip::class);
    }
}
