<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bio extends Model
{

    protected $fillable = ["biography", "job_title","avatar" ];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
