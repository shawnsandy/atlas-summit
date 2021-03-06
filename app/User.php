<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Silber\Bouncer\Database\HasRolesAndAbilities;

class User extends Authenticatable
{
    use Notifiable;
//    use HasRoles;
    use HasRolesAndAbilities;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'region_id', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function workshops()
    {
        return $this->belongsToMany(Workshop::class);
    }

    public function bio()
    {
        return $this->hasOne(Bio::class);
    }

    public function getFullNameAttribute($value)
    {
        return strtoupper($this->first_name . " " . $this->last_name);
    }

    public function scans()
    {
        return $this->hasMany(Scans::class);
    }


}
