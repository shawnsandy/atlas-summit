<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ShawnSandy\Extras\ExtrasFacade as Extras;

class Workshop extends Model
{
    protected $fillable = ["name", "description", "date", "start_time", "end_time", "room_id", "cover_image"];

    public function room() {
        return $this->belongsTo(Rooms::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function getWorkshopThumbnailAttribute($val)
    {
        return "/extras/public/img/workshops/{$this->cover_image}/?w=350&h=210&fit=crop-center";
    }


    public function getWorkshopImageAttribute($val)
    {
        return "/extras/public/img/workshops/{$this->cover_image}/?w=720&h=380&fit=crop-center";
    }

    public function getShortDescriptionAttribute($val)
    {
       return Extras::str_limit(strip_tags($this->description));
    }


}
