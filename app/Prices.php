<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prices extends Model
{
    public function trip() {
        return $this->hasMany(Trip::class);
    }
}
