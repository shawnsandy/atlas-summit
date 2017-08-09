<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scans extends Model
{
    protected $fillable = [];

    public function room()
    {
        return $this->belongsTo(Rooms::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
