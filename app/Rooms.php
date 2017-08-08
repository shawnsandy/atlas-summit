<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{

    public function workshops() {
        return $this->hasMany(Workshop::class);
    }
}
