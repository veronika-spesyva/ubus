<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Trip extends Model
{
    use Sluggable;

    protected $fillable = ['title', 'title_h1', 'route', 'image', 'time', 'distance', 'price', 'schedule', 'content', 'days', 'bus_id'];
    
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
    public static function add($fields){
        $trips = new static;
        $trips -> fill($fields);
        $trips -> save();

        return $trips;
    }

    public function setDaysAttribute($values){
        $days = [0,0,0,0,0,0,0];
        foreach ($values as $value) {
            $days[$value] = 1;
        }
        $this->attributes['days'] = bindec(join("", $days));
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
