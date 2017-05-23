<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    protected $fillable = ["name", "description", "date", "start_time", "end_time", "room_id"];

    public function participants(){
        return $this->belongsToMany(User::class);
    }


}
