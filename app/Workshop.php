<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    protected $fillable = ["name", "description", "date", "start_time", "end_time", "room_id", "cover_image"];

    public function room() {
        return $this->belongsTo(Rooms::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }


}
