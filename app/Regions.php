<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    protected $fillable = [ "name", "address", "lat", "long", "phone", "website", "logo" ];

    public function scopeRegionsList($query)
    {
        return $query->pluck("name", "id");
    }

}
