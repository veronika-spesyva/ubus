<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

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

public static function add($fields){
        $passengers = new static;
        $passengers -> fill($fields);
        $passengers -> save();

        return $passengers;
    }

    public function setDateAttribute($value){
        
        $date=Carbon::createFromFormat('d/m/y', $value)->format('Y-m-d');
        $this->attributes['date'] = $date;
    }
    public function getDateAttribute($value)
    {
        $date = Carbon::createFromFormat('Y-m-d', $value)->format('d/m/y');
        return $date;
    }

    public function remove()
    {
        $this->removeImage();
        $this->delete();
    }
    public function removeImage()
    {
        if($this->image != null)
        {
            Storage::delete('uploads/' . $this->image);
        }
    }
    public function uploadImage($image)
    {
        if($image == null) { return; }

        $this->removeImage();
        $filename = str_random(10) . '.' . $image->extension();
        $image->storeAs('uploads', $filename);
        $this->image = $filename;
        $this->save();
    }

    public function getImage()
    {
        if($this->image == null)
        {
            return '/img/no-image.png';
        }

        return '/uploads/' . $this->image;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }
}
